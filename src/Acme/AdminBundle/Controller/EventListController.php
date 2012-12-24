<?php

namespace Acme\AdminBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class EventListController extends Controller
{
        public function indexAction()
        {
            $id = $_GET['id'];
            /*echo "<pre>";
            print_r($id);
            echo "</pre>";*/

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                'SELECT e FROM AcmeAdminBundle:ResidentEsdeveniment e WHERE e.idresident = :id'
            )->setParameter('id', $id);

            $esdevenimentsResidents = $query->getResult();

            foreach($esdevenimentsResidents as $item)
            {
            	$em = $this->getDoctrine()->getManager();
    			$query = $em->createQuery(
    			    'SELECT e FROM AcmeAdminBundle:Esdeveniment e WHERE e.id = :id')->setParameter('id',$item->getIdesdeveniment());

    			$esdeveniments = $query->getResult();
            }
            return $this->render('AcmeAdminBundle:Admin:list.html.twig',array('esdeveniments' => $esdeveniments));        //Se ha modificado el security.yml para que el logout redirija al login
        }
}