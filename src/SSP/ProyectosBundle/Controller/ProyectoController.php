<?php
namespace SSP\ProyectosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SSP\ProyectosBundle\Entity\Proyectos;

class ProyectoController extends Controller {
    public function listAction (){
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('SSPProyectosBundle:Proyectos')->findAll();
        return $this ->render('SSPProyectosBundle:Proyectos:list.html.twig', array('proyectos'=>$proyectos));
    }
    public function createAction (){
        $proyecto = new Proyectos();
        
    }
    public function deleteAction (){
        
    }
    public function updateAction (){
        
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

