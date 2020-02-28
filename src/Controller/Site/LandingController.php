<?php 
	namespace App\Controller\Site;

 	// use Symfony\Component\HttpFoundation\Response;
	// use Symfony\Component\Routing\Annotation\Method;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

 	class LandingController  extends AbstractController
 	{
 		
 		
 		public function index()
 		{
 			return $this->render('site/landing.html.twig',[
 			]);

 		}
 		
 	}

 ?>