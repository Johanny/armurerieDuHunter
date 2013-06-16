<?php

namespace Kafe\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controlleur principale de l'admin controller
 * Point d'entrée dans le panneau d'admin !
 * 
 * @author Kafe
 */
class AdminController extends Controller
{

    public function indexAction()
    {
        return $this->render('KafeAdminBundle:Admin:accueil.html.twig');
    }
    
    public function sideMenuAction()
    {
        return $this->render('KafeAdminBundle:Admin:sideMenu.html.twig');
    }
    
}

?>
