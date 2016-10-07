<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AuthUser;
use AppBundle\Form\UserType;
use AppBundle\Form\LoginType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use AppBundle\Controller\SessionController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SecurityController extends Controller {

    /**
    * @Route("/public/login", name="login")
    */
    public function loginAction(Request $request) {

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
     
        return $this->render(
        'public/login.html.twig',
        array(
            'last_username' => $lastUsername,
            'error'         => $error,
            )
        );
    }

    /**
    * @Route("/web/login_check", name="login_check")
    */
    public function loginCheck(Request $request) {
    }

    /**
    * @Route("/web/logout", name="logout")
    */
    public function logout(Request $request) {
    }

    /**
    * @Route("/web/postLogin", name="postLogin")
    */
    public function postLogin(Request $request) {
        $sessionController = new SessionController();
        $session = $this->get('session');
        $doctrine = $this->getDoctrine();
        $user = $this->getUser();
        $profile = $sessionController->saveUserProfile($session, $doctrine, $user);
        $sessionController->saveIdFriends($session, $doctrine, $profile);
        $sessionController->saveIdFavClubs($session, $doctrine, $profile);
        $sessionController->saveIdPlayerTournaments($session, $doctrine, $profile);
        $sessionController->saveIdSpectatorTournaments($session, $doctrine, $profile);
        return $this->render('web/home.html.twig');  
    }

    /**
    * @Route("/public/activateAccount/{token}", name="activateAccount")
    */
    public function activateAccount(Request $request, $token) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:AuthtokenToken');
        $tokenDb = $repository->findOneByKey($token);
        if (!$tokenDb) {
            return $this->render('security/failActivation.html.twig');  
        }
        $dateToken = $tokenDb->getCreated();
        $dateTokenExpire = clone $dateToken;
        $dateTokenExpire->add(new \DateInterval('P1D'));
        $now = new \DateTime("now");
        $user = $tokenDb->getUser();
        if ($user->getIsActive()) {
            return $this->render('security/alreadyActivated.html.twig');  
        }
        if($dateTokenExpire > $now) {  
            $user->setIsActive(true);
            $em = $this->getDoctrine()->getManager();
            $em->merge($user);
            $em->flush();
            return $this->render('security/activateAccount.html.twig');  
        } else {
            return $this->render('security/failActivation.html.twig');  
        }
    }

    /**
    * @Route("/public/resetPassword/{token}", name="resetPassword")
    */
    public function resetPassword(Request $request, $token) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:AuthtokenToken');
        $tokenDb = $repository->findOneByKey($token);        
        if (!$tokenDb) {
            echo('notValid');
            return false;
        }

        $user = $this->getUser();
        if ($user == null) {
            $doctrine = $this->getDoctrine();
            $repositoryToken = $doctrine->getRepository('AppBundle:AuthTokentoken');
            $repositoryUser = $doctrine->getRepository('AppBundle:AuthUser');
            $userToken = $repositoryToken->findOneByKey($token);
            $user = $repositoryUser->findOneById($userToken->getUser());
        }
        $data = array();
        $form = $this->createFormBuilder($data)
        ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => false),
                'second_options' => array('label' => false),
            ))    
        ->getForm();
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData()['password'];
            $password = $this->get('security.password_encoder')->encodePassword($user, $data);
            $user->setPassword($password);
            
            $em = $this->getDoctrine()->getManager();
            $em->merge($user);
            $em->flush();
            return $this->render('public/login.html.twig');
        }
        return $this->render('security/resetPassword.html.twig', array("form" => $form->createView()));  
    }

    /**
    * @Route("/public/resetPasswordPage", name="resetPasswordPage")
    */
    public function resetPasswordPage(Request $request) {
        return $this->render('user/resetPassword.html.twig');  
    }

    /**
    * @Route("/public/forgotPassword", name="forgotPassword")
    */
    public function forgotPassword(Request $request) {
        $data = array();
        $form = $this->createFormBuilder($data)
        ->add('hint', TextType::class)
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData()['hint'];
            $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:AuthUser');
            $user = $repository->findOneByUsername($data);
            if ($user) {
                $emailer = new EmailController($this);
                $emailer->sendPasswordResetLinkFunction($user);
            } else {
                $user = $repository->findOneByEmail($data);
                if ($user) {
                    $emailer = new EmailController($this);
                    $emailer->sendPasswordResetLinkFunction($user);
                }
            }
        }
        return $this->render('security/forgotPassword.html.twig', array('form' => $form->createView()));  
    }
}