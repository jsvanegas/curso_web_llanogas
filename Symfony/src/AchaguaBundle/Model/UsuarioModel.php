<?php

namespace AchaguaBundle\Model;

use AchaguaBundle\AuditoriaServices;

class UsuarioModel extends AuditoriaServices
{
    public function __construct(&$conexion){
        $this->setConexion($conexion);
    
    }
    public function consultarTodos() {
        $sql="select * from usuario";
        $listaUsuarios = $this->executeQuery($sql);
        return $listaUsuarios;
    }
    
    /**
     * @param string $nombre
     */
    public function buscarPorNombre($nombre){
        $parametros['nombre'] = $nombre;
        $sql = "select * from usuario where lower (nombre) like :nombre ";
        $listaUsuarios = $this->executeQuery($sql, $parametros);
        return $listaUsuarios;
    }
    /**
     * @param array $datos
     */
    public function insertarUsuario(array $datos){
        $this->insertar($datos, 'usuario', NULL);
    }
    public function modificarUsuario(array $datos){
        $version = $datos['registro_version'];
        $datos['registro_version']= ++$datos['registro_version'];
        $resultado=$this->actualizar($datos, 'usuario', 'id_usuario=:id_usuario and registro_version='.$version );
        if($resultado==0){
            throw new \AchaguaBundle\MyException('Debe Consultar De Nuevo El Registro');
        }
    }
    public function eliminarUsuario($datos){
        $this->eliminar( 'usuario', "id_usuario=$datos");
    }
}

