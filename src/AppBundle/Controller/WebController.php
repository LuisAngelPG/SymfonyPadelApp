<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Form\LoginType;
use AppBundle\Entity\facebookprofile;
use AppBundle\Entity\Club;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class WebController extends Controller {
    
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request) {
        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/web/home", name="home")
     */
    public function homeAction(Request $request) {
        return $this->render('web/home.html.twig');  
    }

    /**
     * @Route("/web/matches", name="matches")
     */
    public function matches(Request $request) {
        return $this->render('web/matches.html.twig');
    }

    /**
     * @Route("/web/tournaments", name="tournaments")
     */
    public function tournaments(Request $request) {
        return $this->render('web/tournaments.html.twig');
    }

    /**
     * @Route("/web/clubs", name="clubs")
     */
    public function clubs(Request $request) {
        return $this->render('web/clubs.html.twig');
    }

    /**
     * @Route("/web/players", name="players")
     */
    public function players(Request $request) {
        return $this->render('web/players.html.twig');
    }
}