<?php

namespace Kafe\ArmureManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kafe\ArmureManagerBundle\Entity\Bustier;
use Kafe\ArmureManagerBundle\Form\BustierType;

/**
 * Controller permettant de gérer les bustiers
 * 
 * @author Johanny
 */
class BustierController extends Controller
{
    
    /**
     * Ajouter un bustier
     * @return Response
     */
    public function ajouterAction()
    {
        $bustier = new Bustier();
        $form = $this->createForm(new BustierType, $bustier);
        
        $breadcrumbText = 'Ajouter un Bustier';
        
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
        
        return $this->render('KafeArmureManagerBundle:Armure:ajouter.html.twig', array(
            'form' => $form->createView(),
            'breadcrumb_text' => $breadcrumbText
        ));
    }

}
