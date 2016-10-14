<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\TournamentClub;
use AppBundle\Entity\UserProfilePlayerprofile;
use AppBundle\Form\ClubType;
use AppBundle\Form\DummyPlayerType;
use AppBundle\Controller\HTMLMakerController as HTML;
use AppBundle\Controller\SessionController;
use Symfony\Component\HttpFoundation\JsonResponse;

class PlayerController extends Controller {

	/**
    * @Route("/player/search", name="searchPlayer")
    */
    public function searchPlayerAction(Request $request) {
        $favPlayers = $this->favPlayers();
        $allPlayers = $this->allPlayers();
        $dummyPlayers = $this->dummyPlayers();
        return $this->render('player/searchPlayers.html.twig',  array('favPlayers' => $favPlayers, 'allPlayers' => $allPlayers, 'dummyPlayers' => $dummyPlayers));
    }

    private function allPlayers() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $players = $repository->findAll();
        return $players;
    }

    private function favPlayers() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $favPlayers = $this->get('session')->get('idFriends');
        $players = $repository->findById($favPlayers);
        return $players;
    }

    private function dummyPlayers() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $profile = $this->get('session')->get('profile');
        $dummyPlayers = $repository->findByCreator($profile);
        return $dummyPlayers;
    }

    /**
    * @Route("/player/view/{playerId}", name="viewPlayer", defaults={"playerId": "0"})
    */
    public function viewPlayer(Request $request, $playerId) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $player = $repository->findOneById($playerId);

        return $this->render('player/viewPlayer.html.twig',  array('player' => $player));
    }

    /**
    * @Route("/player/ajaxFriend/{friendId}", name="playerFriend", defaults={"friendId": "0"})
    */
    public function playerFriend(Request $request, $friendId) {
        $user = $this->getUser();
        $repositoryProfile = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $userProfile = $repositoryProfile->findOneByUser($user->getId()); 
        $friendProfile = $repositoryProfile->findOneById($friendId);

        $userProfile->addMyFriend($friendProfile);

        $em = $this->getDoctrine()->getManager();
        $em->merge($userProfile);
        $em->flush();
        
        $sessionController = new SessionController();
        $session = $this->get('session');
        $doctrine = $this->getDoctrine();
        $sessionController->saveIdFriends($session, $doctrine, $userProfile);
        return true;
    }

    /**
    * @Route("/player/ajaxRemoveFriend/{friendId}", name="ajaxRemoveFriend")
    */
    public function ajaxRemoveFriendAction(Request $request, $friendId) {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $doctrine = $this->getDoctrine();
        $repositoryProfile = $doctrine->getRepository('AppBundle:UserProfilePlayerprofile');
        $userProfile = $repositoryProfile->findOneByUser($user->getId()); 

        $em = $doctrine->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("DELETE FROM userprofileplayerprofilefriends WHERE user_profile_playerprofile_source = :userId AND user_profile_playerprofile_target = :friendId");
        $statement->bindValue('userId', $userProfile->getId());
        $statement->bindValue('friendId', $friendId);
        $statement->execute();
        $results = $statement->fetchAll();    

        $sessionController = new SessionController();
        $session = $this->get('session');
        $sessionController->saveIdFriends($session, $doctrine, $userProfile);
        return new Response();
    }


    /**
    * @Route("/player/addDummyPlayer/", name="addDummyPlayer")
    */
    public function addDummyPlayer(Request $request) {

        $dummy = new UserProfilePlayerprofile();
        $form = $this->createForm(DummyPlayerType::class, $dummy);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->addDummy($dummy, $form);
        }

        return $this->render(
            'player/addDummy.html.twig',
            array('form' => $form->createView(),
                'id' => $dummy->getId())
            ); 
    }

    /**
    * @Route("/player/viewDummyPlayer/{dummyId}", name="viewDummyPlayer")
    */
    public function viewDummyPlayer(Request $request, $dummyId) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $dummy = $repository->findOneById($dummyId);

        return $this->render('player/viewDummyPlayer.html.twig',  array('dummy' => $dummy));

    }
    
    private function updateDummyPic($image, $oldImage) {
        if ($image != null && $oldImage != "default.jpg") {
            $oldImageRoute = $this->getParameter('dummy_image_directory') . '/' . $oldImage;
            unlink($oldImageRoute);
        }
        $imageName = md5(uniqid()).'.'.$image->guessExtension();
        $image->move(
            $this->getParameter('dummy_image_directory'),
            $imageName
            );
        return $imageName;
    }

        /**
    * @Route("/player/ajaxEditDummyPlayer/{dummyId}", name="ajaxEditDummyPlayer")
    */
    public function ajaxEditDummyPlayer(Request $request, $dummyId) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $dummy = $repository->findOneById($dummyId);
        $form = $this->createForm(DummyPlayerType::class, $dummy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addDummy($dummy, $form);
            return $this->render('player/viewDummyPlayer.html.twig',  array('dummy' => $dummy));
        }
        
        return $this->render('/player/templates/editDummyPlayer.html.twig', array('form' => $form->createView(), 'id' => $dummyId));
    }

    /**
    * @Route("/club/ajaxCancelDummyPlayer/{dummyId}", name="ajaxCancelDummyPlayer")
    */
    public function ajaxCancelDummyPlayer(Request $request, $dummyId) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $dummy = $repository->findOneById($dummyId);
        return $this->render('/player/templates/showDummyPlayerInfo.html.twig', array('dummy' => $dummy)); 
    }

    private function addDummy($dummy, $form) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $profile = $repository->findOneByUser($this->getUser());
        $dummy->setNulls();
        $dummy->setCreator($profile);
        $dummy->setIsDummy(true);
        $dummyImage = $dummy->getImage();
        $oldPathImage = $form->get("oldPathImage")->getData();
        $oldPathImage = substr($oldPathImage, 44);
        if ($dummyImage != null) {
            $dummy->setImage($this->updateDummyPic($dummyImage, $oldPathImage));
        } else {        
            $dummy->setImage($oldPathImage);
        }

        $em = $this->getDoctrine()->getManager();
        $em->merge($dummy);
        $em->flush();
    }
}