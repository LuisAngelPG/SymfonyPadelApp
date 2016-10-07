<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Form\LoginType;
use AppBundle\Form\AccountType;
use AppBundle\Form\AuthUserType;
use AppBundle\Form\ProfileType;
use AppBundle\Form\TrainerType;
use AppBundle\Entity\AuthUser;
use AppBundle\Entity\Equipment;
use AppBundle\Entity\UserProfilePlayerprofile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Translation\Translator;
use Symfony\Component\HttpFoundation\JsonResponse;


class UserController extends Controller {
   
    /**
     * @Route("/public/registerUser", name="registerUser")
     */
    public function registerUserAction(Request $request) {
        $userProfile = new UserProfilePlayerprofile();
        $userProfile->setNulls();

        $form = $this->createForm(TrainerType::class, $userProfile);  

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $this->get('security.password_encoder')
            ->encodePassword($userProfile->getUser(), $userProfile->getUser()->getPassword());
            $userProfile->getUser()->setPassword($password);
            $date = new \DateTime();
            $userProfile->getUser()->setLastLogin($date);
            $userProfile->getUser()->setNulls();

            $em = $this->getDoctrine()->getManager();
            $em->persist($userProfile);

            $user = $userProfile->getUser();
            $userProfile->setName($user->getUsername());

            $em->persist($user);
            $em->flush();

            $emailer = new EmailController($this);
            $emailer->sendActivationLink($user);

            return $this->redirectToRoute('login');
        }

        return $this->render(
            'public/registerUser.html.twig',
            array('form' => $form->createView())
            );
    }

    /**
    * @Route("/user/account", name="account")
    */
    public function account(Request $request) {

        return $this->render('user/account.html.twig');
    }


    /**
    * @Route("/web/search", name="search")
    */
    public function searchAction(Request $request) {
        $search = $request->request->get('search');

        $dataUser = $this->searchUser($search);

        $data = array_merge($dataUser);
        
        return $this->render('user/search.html.twig',  array('data' => $data));
    }


    /**
    * @Route("/user/ajaxEdit", name="ajaxEdit")
    */
    public function ajaxEditAction(Request $request) {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $repositoryProfile = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $userProfile = $repositoryProfile->findOneByUser($user->getId());

        $form = $this->createForm(ProfileType::class, $userProfile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $image = $userProfile->getImage();
            if ($image != null) {
                $userProfile = $this->uploadedProfilePic($image, $userProfile);
            } else {
                $profile = $this->get('session')->get('profile');
                $oldImage = $profile->getImage();
                $userProfile->setImage($oldImage);
            }
           
            $session = $this->get('session');
            $session->set('profile', $userProfile);
            $em = $this->getDoctrine()->getManager();
            $em->merge($userProfile);
            $em->flush();

            return $this->render('user/account.html.twig');
        }
        return $this->render('/user/templates/editUserInfo.html.twig', array('form' => $form->createView())); 
    }

    /**
    * @Route("/user/ajaxCancel", name="ajaxCancel")
    */
    public function ajaxCancelAction(Request $request) {
        return $this->render('/user/templates/showUserInfo.html.twig'); 
    }

    /**
    * @Route("/user/ajaxClubFav/{clubId}", name="ajaxClubFav")
    */
    public function ajaxClubFavAction(Request $request, $clubId) {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $repositoryProfile = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $userProfile = $repositoryProfile->findOneByUser($user->getId()); 

        $repositoryClub = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
        $club = $repositoryClub->findOneById($clubId);

        $userProfile->addFavClub($club);
        $em = $this->getDoctrine()->getManager();
        $em->persist($userProfile);
        $em->flush();

        $idFavClubs = $this->updateFavClubs($userProfile);
        $session = $this->get('session');
        $session->set('idFavClubs', $idFavClubs);
        return new Response();
    }

    private function uploadedProfilePic($image, $userProfile) {
        $profile = $this->get('session')->get('profile');
        $oldImage = $profile->getImage();
        if ($oldImage != null) {
            $oldImageRoute = $this->getParameter('user_image_directory') . '/' . $oldImage;
            unlink($oldImageRoute);
        }
        $imageName = md5(uniqid()).'.'.$image->guessExtension();
        $image->move(
            $this->getParameter('user_image_directory'),
            $imageName
            );
        $userProfile->setImage($imageName);
        return $userProfile;
    }

    public function updateFavClubs($userProfile) {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT tournament_club_id FROM user_profile_playerprofile_tournament_club WHERE user_profile_playerprofile_id = :id");
        $statement->bindValue('id', $userProfile->getId());
        $statement->execute();
        $results = $statement->fetchAll();
        $idFavClubs = [];
        foreach ($results as $clubId) {
            array_push($idFavClubs, $clubId["tournament_club_id"]);
        }

        return $idFavClubs;
    }


    /**
    * @Route("/user/ajaxRemoveFavClub/{clubId}", name="ajaxRemoveFavClub")
    */
    public function ajaxRemoveFavClubAction(Request $request, $clubId) {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $repositoryProfile = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $userProfile = $repositoryProfile->findOneByUser($user->getId()); 

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("DELETE FROM user_profile_playerprofile_tournament_club WHERE user_profile_playerprofile_id = :userId AND tournament_club_id = :clubId");
        $statement->bindValue('userId', $userProfile->getId());
        $statement->bindValue('clubId', $clubId);
        $statement->execute();
        $results = $statement->fetchAll();    

        $idFavClubs = $this->updateFavClubs($userProfile);
        $session = $this->get('session');
        $session->set('idFavClubs', $idFavClubs);
        return new Response();
    }
}