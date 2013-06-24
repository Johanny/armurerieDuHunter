<?php

namespace Kafe\ArmureManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kafe\ArmureManagerBundle\Entity\Tete;
use Kafe\ArmureManagerBundle\Form\TeteType;

/**
 * Description of TeteController
 *
 * @author Johanny
 */
class TeteController extends Controller
{
    
    /**
     * Ajouter un bustier
     * @return Response
     */
    public function ajouterAction()
    {
        $tete = new Tete();
        $form = $this->createForm(new TeteType, $tete);
        
        $breadcrumbText = 'Ajouter une Tête';
        
        $request = $this->getRequest();
        if( $request->getMethod() == 'POST' ) {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($tete);
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

?>
