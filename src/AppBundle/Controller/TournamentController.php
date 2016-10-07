<?php

namespace AppBundle\Controller;

use AppBundle\Controller\SessionController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TournamentTournament;
use AppBundle\Entity\TournamentPlayerparticipant;
use AppBundle\Entity\TournamentDummyparticipant;
use AppBundle\Form\TournamentType;


class TournamentController extends Controller {

	/**
    * @Route("/tournament/newTournament", name="newTournament")
    */
    public function newTournament(Request $request) {
    	$tournament = new TournamentTournament();
    	$session = $this->get('session');
	    $idFavClubs = $session->get('idFavClubs');
	    $idFriends = $session->get('idFriends');
	    $profile = $session->get('profile');
	    $repositoryClubs = $this->getDoctrine()->getRepository('AppBundle:TournamentClub');
	    $repositoryPlayers = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $repositoryDummys = $this->getDoctrine()->getRepository('AppBundle:DummyPlayer');
        $favClubs = $repositoryClubs->findById($idFavClubs);
        $friends = $repositoryPlayers->findById($idFriends);
        $dummys = $repositoryDummys->findByCreator($profile);
        $profile = $repositoryPlayers->find($profile->getId());
        $form = $this->createForm(TournamentType::class, $tournament, 
            array('favClubs' => $favClubs, 'friends' => $friends, 'dummys' => $dummys, 'test' => $profile)); 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	$playersCourts = $form->get("playersCourts")->getData();
        	$playersCourts = explode("," ,$playersCourts);
        	$players = $playersCourts[0];
        	if (!empty($playersCourts[1])) {
        		$court = $playersCourts[1];
        	} else {
        		$court = 1;
        	}

        	$clubName = $form->get('club')->getData()->getName();
        	$tournament->setLocalClubName($clubName);
        	$tournament->setAmountPlayers($players);
        	$tournament->setAmountCourts($court);
        	$tournament->setStatus("active");
        	$tournament->setCreator($profile);
        	$tournament->setMetadata("[]");
        	$playersParticipants = $form->get('players')->getData();
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($tournament);
        	foreach ($playersParticipants as $player) {
                $class = get_class($player["player"]);
                if ($class == "AppBundle\Entity\UserProfilePlayerprofile") {
                    $playerParticipant = new TournamentPlayerparticipant();
                    $playerParticipant->setPlayer($player["player"]);
                } else {
                    $playerParticipant = new TournamentDummyparticipant();
                    $playerParticipant->setPlayer($player["player"]);
                }
        		$playerParticipant->setStatus("pending");
        		$playerParticipant->setOrderPlay(10);
        		$playerParticipant->setTournament($tournament);
        		$em->persist($playerParticipant);
        	}

        	$spectatorParticipants = $form->get('spectators')->getData();
        	foreach ($spectatorParticipants as $spectator) {
        		$spectator->setStatus("pending");
        		$spectator->setTournament($tournament);
        		$em->persist($spectator);
        	}
	        $em->flush();
        }

        return $this->render('tournament/newTournament.html.twig',  array('form' => $form->createView()));
    }

    /**
    * @Route("/tournament/viewTournament/{tournamentId}", name="viewTournament")
    */
    public function viewTournament(Request $request, $tournamentId) {
        $repositoryTournament = $this->getDoctrine()->getRepository('AppBundle:TournamentTournament');
        $repositoryParticipant = $this->getDoctrine()->getRepository('AppBundle:TournamentPlayerparticipant');
        $repositoryParticipantDummys = $this->getDoctrine()->getRepository('AppBundle:TournamentDummyparticipant');
        $repositoryPlayer = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
        $repositoryDummys = $this->getDoctrine()->getRepository('AppBundle:DummyPlayer');

        $tournament = $repositoryTournament->findOneById($tournamentId);
        $playersId = $repositoryParticipant->findByTournament($tournament);
        $dummysId = $repositoryParticipantDummys->findByTournament($tournament);
        $players = array();
        $dummys = array();
        foreach ($playersId as $player) {
            array_push($players, $repositoryPlayer->findOneById(($player->getPlayer()->getId())));
        }
        foreach ($dummysId as $player) {
            array_push($dummys, $repositoryDummys->findOneById(($player->getPlayer()->getId())));
        }
        return $this->render('tournament/viewTournament.html.twig', array('tournament' => $tournament, 'players' => $players, 'dummys' => $dummys));
    }

    /**
    * @Route("/tournament/searchTournament", name="searchTournament")
    */
    public function searchTournament(Request $request) {
        $tournaments = $this->getTournaments();
        return $this->render('tournament/searchTournament.html.twig', array('allTournaments' => $tournaments));
    }

    private function getTournaments() {
        $profile = $this->get('session')->get('profile');
        $repositoryPlayer = $this->getDoctrine()->getRepository('AppBundle:TournamentPlayerparticipant');
        $repositorySpectator = $this->getDoctrine()->getRepository('AppBundle:TournamentSpectatorparticipant');
      //  $playerIdTournaments = $this->get('session')->get('playerIdTournaments');
      //  $spectatorIdTournaments = $this->get('session')->get('spectatorIdTournaments');
        $tournamentsPlayer = $repositoryPlayer->findByPlayer($profile->getId());
        $tournamentSpectator = $repositorySpectator->findByPlayer($profile->getId());
        $tournaments = array($tournamentsPlayer, $tournamentSpectator);
       // dump($tournaments, $tournamentsPlayer, $tournamentSpectator, $profile->getId());die();
        return $tournaments;
    }
}