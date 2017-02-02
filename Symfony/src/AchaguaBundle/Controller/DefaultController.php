<?php

namespace AchaguaBundle\Controller;

use AchaguaBundle\Model\UsuarioModel;
use AchaguaBundle\Util\Util;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(){
        $conexion = Util::getConexion($this);
        $usuarioModel = new UsuarioModel($conexion);
        $lista = $usuarioModel->consultarTodos();
        return $this->render('AchaguaBundle:Default:index.html.twig', array('usuarios' => $lista));
    }
    public function eliminarAction(Request $request){
        $idUsuario = $request->get('IdUsuario');
        try{
            $conexion = util::getConexion($this);
            $usarioModel = new UsuarioModel($conexion);
            $usarioModel->eliminarUsuario($idUsuario);
            $respuesta['codigo']= 1;
            $respuesta['mensaje']= 'Registro Eliminado';
            
        } catch (\Exception $ex) {
            $respuesta['codigo']= -1;
            $respuesta['mensaje']= 'No Se Puede Eliminar' . $ex->getMenssage();

        }
        return Util::construyeRespuesta($respuesta);
    }
    public function modificarAction(Request $request){
        $parametros['id_usuario'] = $request->get('idUsuario');
        $parametros['registro_version'] = $request->get('version');
        $parametros['nombre'] = $request->get('nombre');
        $parametros['correo'] = $request->get('correo');
        $parametros['clave'] = $request->get('clave');
        try{
            Util::validarPeticion($this);
            $conexion = util::getConexion($this);
            $usarioModel = new UsuarioModel($conexion);
            $usarioModel->modificarUsuario($parametros);
            $respuesta['codigo']= 1;
            $respuesta['mensaje']= 'Registro Modificado';
          
        } catch (\Exception $ex) {
            $respuesta['codigo']= -1;
            $respuesta['mensaje']= 'No Se Puede Modificar' . $ex->getMessage();
        }
        return Util::construyeRespuesta($respuesta);
    }

    public function consultarAction(Request $request){
        $criterio = $request->get('criterio');
        try{
            Util::validarPeticion($this);
            $conexion = util::getConexion($this);
            $usarioModel = new UsuarioModel($conexion);
            $usuarios = null;

            if (!$criterio) {
                $usuarios = $usarioModel->consultarTodos();
            }else{
                $usuarios = $usarioModel->buscarPorNombre('%'.$criterio.'%');    
            }
            
            if (empty($usuarios)) {
                $respuesta['codigo']= 0;
                $respuesta['mensaje']= 'No se encontraron usuarios.';
            }else{
                $respuesta['codigo']=1;
                $respuesta['mensaje']='Usuarios';
                $respuesta['datos']= $usuarios;    
            }
        } catch(\Exception $ex){
            $respuesta['codigo']= -1;
            $respuesta['mensaje']= 'No Se Puede Consultar' . $ex->getMessage();
        }
        return Util::construyeRespuesta($respuesta);
    }



}