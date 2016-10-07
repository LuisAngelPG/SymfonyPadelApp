<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\TournamentClub;
use AppBundle\Entity\TournamentMatch;
use AppBundle\Form\ClubType;
use AppBundle\Controller\HTMLMakerController as HTML;
use Symfony\Component\HttpFoundation\JsonResponse;

class ClubController extends Controller {


    /**
    * @Route("/match/register/, name="registerMatch")
    */
    public function registerMatch(Request $request) {

        $match = new TournamentMatch();    
        
        
        $form = $this->createForm(ClubType::class, $club);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $this->addClub($club, $form);

            return $this->render('club/viewClub.html.twig',  array('club' => $club));         
        }

        return $this->render(
            'club/registerClub.html.twig',
            array('form' => $form->createView(),
                  'image' => $club->getImage())
            ); 
    }
}