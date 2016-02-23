<?php
    namespace test\MyBundle\Controller;
	
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	
	class AdvertController extends Controller {
		public function indexAction() {
			return $this->render('testMyBundle:Advert:index.html.twig');
		}
		
		public function helloAction($nom) {
			return $this->render('testMyBundle:Advert:hello.html.twig', array('nom' => $nom));
		}
	}

?>