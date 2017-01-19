<?php

namespace GFCTBundle\Controller;

use GFCTBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GFCTBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GFCTBundle:Default:index.html.twig');
    }


    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return new Response("Usuario Registrado");
        }

        return $this->render(
            'GFCTBundle:Default:register.html.twig',
            array('form' => $form->createView())
        );
    }

        public function adminAction()
    {
        return $this->render('GFCTBundle:Default:admin.html.twig');
    }

    public function usuariosAction()
    {
        return $this->render('GFCTBundle:Default:usuarios.html.twig');
    }

     /**
     * @Route("/usuarios/login", name="login")
     */
    public function loginAction(Request $request)
    {

    $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('GFCTBundle:Default:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));

    }

}
