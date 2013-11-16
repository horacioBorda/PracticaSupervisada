<?php

namespace SSP\ProyectosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SSPProyectosBundle:Default:index.html.twig', array('name' => $name));
    }
}
