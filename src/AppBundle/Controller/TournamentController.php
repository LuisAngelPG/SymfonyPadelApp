<?php

namespace AppBundle\Controller;

use AppBundle\Controller\SessionController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TournamentTournament;
use AppBundle\Entity\TournamentRound;
use AppBundle\Entity\TournamentMatch;
use AppBundle\Entity\TournamentMatchPartnerOne;
use AppBundle\Entity\TournamentMatchPartnerTwo;
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
       // $repositoryDummys = $this->getDoctrine()->getRepository('AppBundle:DummyPlayer');
        $favClubs = $repositoryClubs->findById($idFavClubs);
        $friends = $repositoryPlayers->findById($idFriends);
        $dummys = $repositoryPlayers->findByCreator($profile);
        $profile = $repositoryPlayers->find($profile->getId());
        $form = $this->createForm(TournamentType::class, $tournament, 
            array('favClubs' => $favClubs, 'friends' => $friends, 'dummys' => $dummys, 'test' => $profile)); 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	$playersCourts = $form->get("playersCourts")->getData();
        	$playersCourts = explode("," ,$playersCourts);
        	$players = $playersCourts[0];
        	if (!empty($playersCourts[1])) {
        		$courts = $playersCourts[1];
        	} else {
        		$courts = 1;
        	}

        	$clubName = $form->get('club')->getData()->getName();
        	$tournament->setLocalClubName($clubName);
        	$tournament->setAmountPlayers($players);
        	$tournament->setAmountCourts($courts);
        	$tournament->setStatus("active");
        	$tournament->setCreator($profile);
        	$tournament->setMetadata("[]");
        	$playersParticipants = $form->get('players')->getData();
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($tournament);
            $x = 1;
        	foreach ($playersParticipants as $player) {
                $class = get_class($player["player"]);
                if ($class == "AppBundle\Entity\UserProfilePlayerprofile") {
                    $playerParticipant = new TournamentPlayerparticipant();
                    $playerParticipant->setPlayer($player["player"]);
                } else {
                    $playerParticipant = new TournamentPlayerparticipant();
                    $playerParticipant->setPlayer($player["player"]);
                }
        		$playerParticipant->setStatus("pending");
        		$playerParticipant->setOrderPlay($x);
        		$playerParticipant->setTournament($tournament);
        		$em->persist($playerParticipant);
                $x++;
        	}

        	$spectatorParticipants = $form->get('spectators')->getData();
        	foreach ($spectatorParticipants as $spectator) {
        		$spectator->setStatus("pending");
        		$spectator->setTournament($tournament);
        		$em->persist($spectator);
        	}

            $roundsReference = array(
                "4/1" => 3,
                "5/1" => 5,
                "6/1" => 8,
                "8/2" => 7,
                "12/3" => 11,
                "16/4" => 15,
                "20/5" => 19,
                "24/6" => 23
                );

            $matchups = array();
            $numPlayers = $tournament->getAmountPlayers();
            $playersCourts = $numPlayers . "/" . $tournament->getAmountCourts();
            $rounds = $roundsReference[$playersCourts];
            if ($numPlayers == "5") {
               $in = array (
                "0",
                "1",
                "2",
                "3",
                "4",
                ); 
            } else {
                $in = array (
                "0",
                "1",
                "2",
                "3",
                "4",
                "5",
                );
            }
            $shift = false;
            // for rounds            
            for ($i=0; $i<$rounds; $i++) {  
                        $out = array();
 
                $round = new TournamentRound();
                $round->setNumber($i+1);
                $round->setTournament($tournament);
                $paired = array();
                if ($numPlayers == "5") {
                    if ($shift) {
                        $n = array_shift($in);
                        $shift = false;
                    } else {
                        $n = array_pop($in);
                        $shift = true;
                    }
                    $out[$n] = true;
                }

                if ($numPlayers == "6") {
                    if ($shift) {
                        $n = array_shift($in);
                        $m = array_shift($in);
                        $shift = false;
                    } else {
                        $n = array_pop($in);
                        $m = array_pop($in);
                        $shift = true;
                    }
                    $out[$n] = true;
                    $out[$m] = true;
                                    dump($out);

                }
                $em->persist($round);
                // for courts
                for ($x=0; $x<$courts; $x++) {
                    $match = new TournamentMatch();
                    $match->setRound($round);
                    $match->setCourt($x+1);
                    $match->setScoreOne(0);
                    $match->setScoreTwo(0);
                    $em->persist($match);
                    $teamOneOne = new TournamentMatchPartnerOne();
                    $teamOneTwo = new TournamentMatchPartnerOne();
                    $teamTwoOne = new TournamentMatchPartnerTwo();
                    $teamTwoTwo = new TournamentMatchPartnerTwo();
                    $teamOneOne->setMatch($match);
                    $teamOneTwo->setMatch($match);
                    $teamTwoOne->setMatch($match);
                    $teamTwoTwo->setMatch($match);
                    $teamOneAssigned = false;
                    $finshAssignment = false;
                    //for 1st player of team
                    foreach ($playersParticipants as $keyOne => $valueOne) {
                        //for 2nd player of team
                        foreach ($playersParticipants as $keyTwo => $valueTwo) {
                            if (!array_key_exists($keyOne, $paired) && !array_key_exists($keyTwo, $paired) && 
                                !array_key_exists($keyOne, $out) && !array_key_exists($keyTwo, $out)) {
                                if ($keyOne != $keyTwo) {
                                    $keyMatchOne = $keyOne . "-" . $keyTwo;
                                    $keyMatchTwo = $keyTwo . "-" . $keyOne;
                                    if ((array_key_exists($keyMatchOne, $matchups) == false) && (array_key_exists($keyMatchTwo, $matchups) == false)) {
                                        $matchups[$keyMatchOne] = true;
                                        $paired[$keyOne] = true;
                                        $paired[$keyTwo] = true;
                                        if ($teamOneAssigned == false) {
                                            $teamOneOne->setPlayerProfile($valueOne["player"]);
                                            $teamOneTwo->setPlayerProfile($valueTwo["player"]);
                                            $teamOneAssigned = true;
                                            $em->persist($teamOneOne);
                                            $em->persist($teamOneTwo);
                                        } else {
                                            $teamTwoOne->setPlayerProfile($valueOne["player"]);
                                            $teamTwoTwo->setPlayerProfile($valueTwo["player"]);
                                            $teamOneAssigned = false;
                                            $em->persist($teamTwoOne);
                                            $em->persist($teamTwoTwo);
                                        }
                                        $playersPaired = sizeOf($paired);
                                        if ($playersPaired == 4 || $playersPaired == 5 || $playersPaired == 8 || $playersPaired == 12 || $playersPaired == 16) {
                                            $finshAssignment = true;
                                        }
                                        break;
                                    }
                                }
                           }
                        }
                        if ($finshAssignment == true) {
                            break;
                        }
                    }
                }
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
        $repositoryRounds = $this->getDoctrine()->getRepository('AppBundle:TournamentRound');
        $repositoryMatches = $this->getDoctrine()->getRepository('AppBundle:TournamentMatch'); 
        $repositoryTeamOne= $this->getDoctrine()->getRepository('AppBundle:TournamentMatchPartnerOne'); 
        $repositoryTeamTwo = $this->getDoctrine()->getRepository('AppBundle:TournamentMatchPartnerTwo'); 
        $repositoryParticipant = $this->getDoctrine()->getRepository('AppBundle:TournamentPlayerparticipant');
        //$repositoryParticipantDummys = $this->getDoctrine()->getRepository('AppBundle:TournamentDummyparticipant');
        $repositoryPlayer = $this->getDoctrine()->getRepository('AppBundle:UserProfilePlayerprofile');
  //      $repositoryDummys = $this->getDoctrine()->getRepository('AppBundle:DummyPlayer');

        $tournament = $repositoryTournament->findOneById($tournamentId);
        $playersId = $repositoryParticipant->findByTournament($tournament);
        $dummysId = $repositoryParticipant->findByTournament($tournament);
        $players = array();
        $dummys = array();
        if ($playersId != null) {
            foreach ($playersId as $player) {
            array_push($players, $repositoryPlayer->findOneById(($player->getPlayer()->getId())));
            }
        }
        if ($dummysId != null) {
            foreach ($dummysId as $player) {
            array_push($dummys, $repositoryPlayer->findOneById(($player->getPlayer()->getId())));
            }    
        }
        $rounds = $repositoryRounds->findByTournament($tournament);
        foreach ($rounds as $round) {
            $round->matches = $repositoryMatches->findByRound($round);
            $i = 0;
            foreach ($round->matches as $match) {
                $round->matches[$i]->teamOne = $repositoryTeamOne->findByMatch($match);
                $round->matches[$i]->teamTwo = $repositoryTeamTwo->findByMatch($match);  
                $i++;
            }
        }
        return $this->render('tournament/viewTournament.html.twig', array('tournament' => $tournament, 'players' => $players, 'dummys' => $dummys, 'rounds' => $rounds));
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
        $tournamentsPlayer = $repositoryPlayer->findByPlayer($profile->getId());
        $tournamentSpectator = $repositorySpectator->findByPlayer($profile->getId());
        $tournaments = array($tournamentsPlayer, $tournamentSpectator);
        return $tournaments;
    }
}