<?php

namespace Kafe\ArmureManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kafe\ArmureManagerBundle\Entity\Bustier;
use Kafe\ArmureManagerBundle\Form\BustierType;

class BustierController extends Controller
{
    public function ajouterAction()
    {
        $bustier = new Bustier();
        $form = $this->createForm(new BustierType, $bustier);
        
        $request = $this->getRequest();
        if( $request->getMethod() == 'POST' ) {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($bustier);
                $em->flush();
                return $this->redirect($this->generateUrl('kafe_admin_homepage'));
            }
        }
        
        return $this->render('KafeArmureManagerBundle:Bustier:ajouter.html.twig', array(
            'form' => $form->createView()   
        ));
    }

}
