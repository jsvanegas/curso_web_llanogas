<?php

namespace SesionesBundle\Controller;

use Exception;
use SesionesBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    public function indexAction(Request $request ){
        return $this->render('SesionesBundle:Default:ajax.html.twig');
    } 
        
    public function peticionAjaxAction(Request $request){
        try{
            $usuario = new Usuario();
            $usuario->setCorreo($request->get('correo'));
            $usuario->setClave($request->get('clave'));
            $usuario->setNombre($request->get('nombre'));      
            $em = $this->getDoctrine()->getManager();
            $em ->persist($usuario);
            $em ->flush(); 
            $repositorio = $this->getDoctrine()->getRepository('SesionesBundle:Usuario');
            $lista= $repositorio->findAll();
            $listaUsuarios=array();
            foreach ($lista as $usuario){
                $listaUsuarios[]=$usuario->serializar();
            }
            $respuesta['codigo']=1;
            $respuesta['mensaje']='peticion correctamente';
            $respuesta['datos']=$listaUsuarios;
        } catch (\Exception $e){
            $respuesta['codigo']=1;
            $respuesta['mensaje']=$e->getMessage();
        }
        $response = new Response(json_encode($respuesta));
        $response->headers->set('Content-Type','application/json');
        return $response;
    }
}
