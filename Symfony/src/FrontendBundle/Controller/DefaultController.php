<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontendBundle:Default:index.html.twig');
    }

    public function ejemploBlancoAction()
    {
        return $this->render('FrontendBundle:Default:pagina_ejemplo.html.twig');
    }

    public function filltableAction(){
    	return $this->render('FrontendBundle:Default:filltable.html.twig');	
    }

    public function apptableAction(){
    	return $this->render('FrontendBundle:Default:apptable.html.twig');	
    }
}
