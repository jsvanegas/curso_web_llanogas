<?php

namespace SesionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SesionesController extends Controller
{
    public function indexAction($name)
            
    {
        $form = $this->createFormBuilder()
                
//                ->add('num1', 'text', array('label' => 'Número 1'))
//                ->add('num2', 'text', array('label' => 'Número 2'))
//                ->add('sumar', 'submit')
                ->getForm();   
        
        return $this->render('SesionesBundle:Default:index.html.twig', array('form' => $form->createView()));  
    }
    
}

