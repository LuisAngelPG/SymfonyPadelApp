<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\TournamentClub;
use AppBundle\Entity\AuthtokenToken;
use AppBundle\Form\ClubType;
use AppBundle\Controller\HTMLMakerController as HTML;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class EmailController extends Controller {
   
    private $context = null;
    function __construct($context = null) {
        $this->context = $context;
    }

    /**
    * @Route("/email/sendActivationLink", name="sendActivationLink")
    */
    public function sendActivationLink($user) {
        $now = new \DateTime("now");
        $token = md5($user->getUsername() . $user->getPassword() . $now->getTimeStamp());
        $link = $url = $this->context->generateUrl(
            'activateAccount',
            array('token' => $token),
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        $doctrine = $this->context->getDoctrine();
        $this->saveToken($token, $user, $doctrine);
        $message = \Swift_Message::newInstance()
        ->setSubject('ActivationLink')
        ->setFrom('pgluisangel@gmail.com')
        ->setTo($user->getEmail())
        ->setBody(
            $this->context->renderView('emails/activationLink.html.twig', array(
                'link' => $link
            )),
            'text/html'
        )
        ;
        $this->context->get('mailer')->send($message);
    }

    /**
    * @Route("/email/sendPasswordResetLink", name="sendPasswordResetLink")
    */
    public function sendPasswordResetLink(Request $request) {
        $user = $this->getUser();
        $now = new \DateTime("now");
        $token = md5($user->getUsername() . $user->getPassword() . $now->getTimeStamp());
        $link = $url = $this->generateUrl(
            'resetPassword',
            array('token' => $token),
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        $doctrine = $this->getDoctrine();
        $this->saveToken($token, $user, $doctrine);
        $message = \Swift_Message::newInstance()
        ->setSubject('resetPasswordLink')
        ->setFrom('pgluisangel@gmail.com')
        ->setTo($user->getEmail())
        ->setBody(
            $this->renderView('emails/resetPasswordLink.html.twig', array(
                'link' => $link
            )),
            'text/html'
        )
        ;
        $this->get('mailer')->send($message);
        return $this->render('web/home.html.twig');  
    }   

    public function sendPasswordResetLinkFunction($user) {
        $now = new \DateTime("now");
        $token = md5($user->getUsername() . $user->getPassword() . $now->getTimeStamp());
        $link = $url = $this->context->generateUrl(
            'resetPassword',
            array('token' => $token),
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        $doctrine = $this->context->getDoctrine();
        $this->saveToken($token, $user, $doctrine);
        $message = \Swift_Message::newInstance()
        ->setSubject('resetPasswordLink')
        ->setFrom('pgluisangel@gmail.com')
        ->setTo($user->getEmail())
        ->setBody(
            $this->context->renderView('emails/resetPasswordLink.html.twig', array(
                'link' => $link
            )),
            'text/html'
        )
        ;
        $this->context->get('mailer')->send($message);
    }   

    private function saveToken($token, $user, $doctrine) {
        $em = $doctrine->getManager();
        $authTokenRepository = $doctrine->getRepository("AppBundle:AuthtokenToken");
        $authToken = $authTokenRepository->findOneByUser($user);
        $newUser = false;
        if ($authToken == null) {
            $newUser = true;
            $authToken = new AuthtokenToken();
        }
        $authToken->setKey($token);
        $authToken->setUser($user);
        $authToken->setCreated(new \DateTime());
        if ($newUser) {
            $em->persist($authToken);
        } else {
            $em->merge($authToken);
        }
        $em->flush();
    }
}