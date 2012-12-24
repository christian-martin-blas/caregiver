<?php

namespace Acme\AdminBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
        public function indexAction()
        {
        	$em = $this->getDoctrine()->getManager();
			$query = $em->createQuery(
			    'SELECT r FROM AcmeAdminBundle:Resident r'); 

			$residents = $query->getResult();
            return $this->render('AcmeAdminBundle:Admin:index.html.twig',array('residents' => $residents));        //Se ha modificado el security.yml para que el logout redirija al login
        }
}