<?php 

namespace App\Controller\Site\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController 
{
    
    /**
     * @Route("/login",name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $errors =$authenticationUtils->getLastAuthenticationError();
        dd($errors);

        // $lastemail = $authenticationUtils->getLastEmail();
        return $this->render('site/landing.html.twig', [
            'email' => '',
            'errors' => $errors
        ]);
    }
}
