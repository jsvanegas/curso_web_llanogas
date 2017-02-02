<?php

namespace EjerciciosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->forward('SesionesBundle:sesiones:index', array('name' => $name));
        
    }
}
