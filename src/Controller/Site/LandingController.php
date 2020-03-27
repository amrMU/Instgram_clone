<?php 
	namespace App\Controller\Site;

 	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 	use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Component\HttpFoundation\Request;
	use Doctrine\ORM\EntityManagerInterface;
	use App\Form\SignUpFormType;
	use App\Entity\Models\Users;

 	class LandingController  extends AbstractController
 	{
 		
 		/**
	    * @Route("/", name="index")
	    */
 		public function index()
 		{
 			return $this->render('site/landing.html.twig',[
				 'errors'=>[],
				 'email'=>''
			 ]);

 		}

 		/**
	    * @Route("/register", name="register")
	    */
 		public function getRegister(
 			EntityManagerInterface $em,
 			UserPasswordEncoderInterface $encoder,
 			Request $request
 		){
 			$form = $this->createForm(SignUpFormType::class);
 			$form->handleRequest($request);

		    if ($form->isSubmitted() && $form->isValid()) {
		    	
		    	$data =  $form->getData();
		    	$user = new Users;
    	        $entityManager = $this->getDoctrine()->getManager();
		    	$user->setFname($data['fname']);
		    	$user->setLname($data['lname']);
		    	$user->setUsername($data['username']);
		    	// dd($user);
		    	$user->setEmail($data['email']);
		    	$password  = $data['password'];
	    	    $encoded = $encoder->encodePassword($user, $password);
		    	$user->setPassword($encoded);
		    	$entityManager->persist($user);
		    	$entityManager->flush();
// dd($entityManager,$user);
 			}
 			return $this->render('site/auth/regester.html.twig',[
 				'signUpForm'=>$form->createView(),
 			]);
 		}

 		// /** 
 		// * @route("register", name="post_register")
 		// */
 		// public function postRegester(Request $request)
 		// {


 		// 	dd($request->getData());
		    
 		// }
 		
 		
 	}

 ?>