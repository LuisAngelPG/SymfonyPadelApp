<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Form\LoginType;
use AppBundle\Entity\AppUser;
use AppBundle\Entity\Club;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SessionController extends Controller {

	public function saveIdFriends($session, $doctrine, $profile) {

        $em = $doctrine->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT user_profile_playerprofile_target FROM userprofileplayerprofilefriends WHERE user_profile_playerprofile_source = :id");
        $statement->bindValue('id', $profile->getId());
        $statement->execute();
        $results = $statement->fetchAll();
        $idFriends = [];
        foreach ($results as $friendId) {
            array_push($idFriends, $friendId["user_profile_playerprofile_target"]);
        }

        $session->set('idFriends', $idFriends);
	}

	public function saveIdFavClubs($session, $doctrine, $profile) {

        $em = $doctrine->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT tournament_club_id FROM user_profile_playerprofile_tournament_club WHERE user_profile_playerprofile_id = :id");
        $statement->bindValue('id', $profile->getId());
        $statement->execute();
        $results = $statement->fetchAll();
        $idFavClubs = [];
        foreach ($results as $clubId) {
            array_push($idFavClubs, $clubId["tournament_club_id"]);
        }

        $session->set('idFavClubs', $idFavClubs);
	}

	public function saveIdPlayerTournaments($session, $doctrine, $profile) {
		$em = $doctrine->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT tournament_id FROM tournament_playerparticipant WHERE player_id = :id");
        $statement->bindValue('id', $profile->getId());
        $statement->execute();
        $results = $statement->fetchAll();
		$idTournaments = [];
        foreach ($results as $tournamentId) {
            array_push($idTournaments, $tournamentId["tournament_id"]);
        }

        $session->set('idPlayerTournaments', $idTournaments);
	}

	public function saveIdSpectatorTournaments($session, $doctrine, $profile) {
		$em = $doctrine->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT tournament_id FROM tournament_spectatorparticipant WHERE player_id = :id");
        $statement->bindValue('id', $profile->getId());
        $statement->execute();
        $results = $statement->fetchAll();
		$idTournaments = [];
        foreach ($results as $tournamentId) {
            array_push($idTournaments, $tournamentId["tournament_id"]);
        }

        $session->set('idSpectatorTournaments', $idTournaments);
	}


	public function saveUserProfile($session, $doctrine, $user) {
        $em = $doctrine->getManager();
        $repository = $doctrine->getRepository('AppBundle:UserProfilePlayerprofile');
        $profile = $repository->findOneByUser($user->getId());

        $session->set('profile', $profile);
        return $profile;
	}
}