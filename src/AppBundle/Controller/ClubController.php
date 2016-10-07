<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\TournamentClub;
use AppBundle\Form\ClubType;
use AppBundle\Controller\HTMLMakerController as HTML;
use Symfony\Component\HttpFoundation\JsonResponse;

class ClubController extends Controller {

    /**
    * @Route("/club/search", name="searchClub")
    */
    public function searchClubAction(Request $request) {
        $favClubs = $this->favClubs();
        $allClubs = $this->allClubs();
        return $this->render('club/searchClub.html.twig',  array('favClubs' => $favClubs, 'allClubs' => $allClubs));
    }

    private function allClubs() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
        $clubs = $repository->findAll();
        return $clubs;
    }

    private function favClubs() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
        $favClubs = $this->get('session')->get('idFavClubs');
        $clubs = $repository->findById($favClubs);
        return $clubs;
    }

    /**
    * @Route("/club/view/{clubId}", name="viewClub", defaults={"clubId": "0"})
    */
    public function viewClubAction(Request $request, $clubId) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
        $club = $repository->findOneById($clubId);
        return $this->render('club/viewClub.html.twig',  array('club' => $club));
    }

    /**
     * @Route("/club/settings", name="clubSettings")
     */
    public function clubSettings(Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
        $user = $this->getUser();
        $ownerClubs = $repository->findByOwner($user);

        return $this->render('manager/clubSettings.html.twig', array('clubs' => $ownerClubs));
    }

    /**
    * @Route("/club/register/{clubId}", name="registerClub", defaults={"clubId": "0"})
    */
    public function registerClub(Request $request, $clubId) {

        if ($clubId != 0) {
            $repository = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
            $club = $repository->findOneById($clubId);
        } else {
            $club = new TournamentClub();    
        }
        $form = $this->createForm(ClubType::class, $club);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->addClub($club, $form);
            return $this->render('club/viewClub.html.twig',  array('club' => $club));         
        }

        return $this->render(
            'club/registerClub.html.twig',
            array('form' => $form->createView(),
                  'image' => $club->getImage(),
                  'id' => $clubId)
            ); 
    }

    /**
    * @Route("/club/ajaxEdit/{clubId}", name="clubAjaxEdit")
    */
    public function clubAjaxEditAction(Request $request, $clubId) {
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
        $club = $repository->findOneById($clubId);
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addClub($club, $form);
            return $this->render('club/viewClub.html.twig',  array('club' => $club));
        }
        
        $owner = false;
        if ($club->getOwner() == $this->getUser()->getId()) {
            $owner = true;
        }

        return $this->render('/club/templates/editClubInfo.html.twig', array('form' => $form->createView(), 'id' => $clubId, 'owner' => $owner, 'club' => $club));
    }

    /**
    * @Route("/club/ajaxCancel/{clubId}", name="clubAjaxCancel")
    */
    public function clubAjaxCancelAction(Request $request, $clubId) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
        $club = $repository->findOneById($clubId);
        return $this->render('/club/templates/showClubInfo.html.twig', array('club' => $club)); 
    }

    private function addClub($club, $form) {
        $club->setNotNulls();
        $isOwner = $form->get("isOwner")->getData();
        
        if ($isOwner) {
            $user = $this->getUser();    
            $userId = $user->getId();
            $club->setOwner($userId);
        }
        $clubImage = $club->getImage();
        $oldPathImage = $form->get("oldPathImage")->getData();
        $oldPathImage = substr($oldPathImage, 44);
        if ($clubImage != null) {
            $club->setImage($this->updatePic($clubImage, $oldPathImage));
        } else {
            $club->setImage($oldPathImage);
        }
        $address = $form->get("location")->getData();
        $club->setAddress($address);
        $club->setLongitude($form->get("longitude")->getData());
        $club->setLatitude($form->get("latitude")->getData());

        $em = $this->getDoctrine()->getManager();
        $em->persist($club);
        $em->flush();
    }

    private function parseAddress($form) {
        $address = null;
        $str;
        if (($str = $form->get("route")->getData()) != null) {
            $address = $address . $str . ", ";
        }
        if (($str = $form->get("street_number")->getData()) != null) {
            $address = $address . $str . ", ";
        }
        if (($str =  $form->get("locality")->getData()) != null) {
            $address = $address . $str . ", ";
        }
        if (($str = $form->get("administrative_area_level_4")->getData()) != null) {
            $address = $address . $str . ", ";
        }
        if (($str = $form->get("postal_code")->getData()) != null) {
            $address = $address . $str . ", ";
        }
        if (($str = $form->get("administrative_area_level_2")->getData()) != null) {
            $address = $address . $str . ", ";
        }
        if (($str =  $form->get("country")->getData()) != null) {
            $address = $address . $str;
        }
        return $address;
    }

    private function updatePic($image, $oldImage) {
        if ($image != null && $oldImage != "default.jpg") {
            $oldImageRoute = $this->getParameter('club_image_directory') . '/' . $oldImage;
            unlink($oldImageRoute);
        }
        $imageName = md5(uniqid()).'.'.$image->guessExtension();
        $image->move(
            $this->getParameter('club_image_directory'),
            $imageName
            );
        return $imageName;
    }
}