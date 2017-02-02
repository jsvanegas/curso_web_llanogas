<?php

namespace AchaguaBundle\Util;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Bundle\Myexception;


class Util {

    /**
     * Crea un combo de html
     * @param string $nombre identificador del combo
     * @param array $listaEstados información del combo
     * @return string html con el combo
     */
    public static function crearCombo($nombre, $listaEstados) {
        $html = "<select id='$nombre'>";
        foreach ($listaEstados as $key => $value) {
            $html .= "  <option value='$key'>$value</option>";
        }
        $html .= "</select>";
        return $html;
    }

    public static function crearComboEx($nombre, $listaEstados) {
        $html = "<select id='$nombre'>";
        $html .= "  <option value='-1'>Seleccione</option>";
        foreach ($listaEstados as $key => $value) {
            $html .= "  <option value='$key'>$value</option>";
        }
        $html .= "</select>";
        return $html;
    }

    /**
     * Crea una respuesta JSON de acuero a un objeto.
     * @param type $respuesta
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function construyeRespuesta($respuesta) {
        $response = new Response(json_encode($respuesta));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Verifica que la petición se haga por el método POST.
     * @param \Symfony\Bundle\FrameworkBundle\Controller\Controller $control
     * @throws MyException
     */
    public static function validarPeticion(&$control) {
        $request = $control->getRequest();
        if ($request->getMethod() !== 'POST') {
            throw new MyException('Error, petición inválida', -1);
        }
    }

    


    /**
     * Realiza un redireccionamiento de una página.
     * @param type $pagina
     */
    public static function redireccionar($pagina, $metodo = 'POST') {
        if ($metodo === 'GET') {
            $response = new Response();
            $response->setStatusCode(200);
            $response->headers->set('location', $pagina);
            $response->send();
        } else {
            throw new MyException('Se ha cerrado la sesión', -2);
        }
    }

    /**
     * Obtiene la conexión del controller
     * @param \Symfony\Bundle\FrameworkBundle\Controller\Controller $control
     * @return \Doctrine\DBAL\Connection
     */
    public static function getConexion($control) {
        try {
            $conexion = $control->getDoctrine()->getManager()->getConnection();
            $conexion->getConfiguration()->setSQLLogger(null);
            return $conexion;
        } catch (\Exception $e) {
            throw new MyException('' . $e->getMessage(), -1);
        }
    }


    /**
     * Obtiene la fecha actual del sistema
     * @return date
     */
    public static function fechaActual() {
        return date('Y-m-d');
    }

   
    /**
     * Sube un archivo al servidor
     * @param  \Symfony\Component\HttpFoundation\Request $request
     * @return array Lista de archivos que se subieron
     */
    public static function subirAdjunto($request, $idUsuario, $modulo, $tamano = null) {
        $listaArchivos = array();
        $archivoDestino = null;
        foreach ($request->files as $uploadedFile) {
            if (!is_object($uploadedFile)) {
                throw new MyException('Error, Debe seleccionar un archivo.', -1);
            }
            $name = $uploadedFile->getClientOriginalName();
            $rutaArchivo = RUTA_ARCHIVOS . $modulo . '/';
            if (!file_exists($rutaArchivo)) {
                mkdir($rutaArchivo);
            }
            $partesNombreArchivo = explode(".", $name);
            $extension = end($partesNombreArchivo);
            $nombreArchivo = rand(0, 10000) . round(microtime(true) * 1000) . '_' . $idUsuario . '.' . $extension;
            $archivoDestino = $rutaArchivo . $nombreArchivo;
            $tamanoArchivo = $uploadedFile->getClientSize();
            //print_r($uploadedFile);
            if (!empty($tamano)) {
                if ($tamanoArchivo > $tamano) {
                    throw new MyException('El tamaño del archivo no es permitido', -1);
                }
            }
            $subido = move_uploaded_file($uploadedFile->getPathname(), $archivoDestino);
            if ($subido) {
                $archivo['rutaarchivo'] = $archivoDestino;
                $archivo['ruta'] = RUTA_ARCHIVOS_WEB . $modulo . '/' . $nombreArchivo;
                $archivo['nombrearchivo'] = $name;
                $archivo['fileCode'] = $request->get('fileCode');
                $listaArchivos[] = $archivo;
            }
        }
        return $listaArchivos;
    }

    public static function crearComboBox($nombre, $listaEstados) {
        $html = "";
        foreach ($listaEstados as $key => $value) {
            $html .= "<input type='checkbox' value='$key' data-attr='Tipo Suscripcion'/>";
            $html .= "$value";
        }

        return $html;
    }

    public static function crearComboLu($nombre, $listaEstados) {

        $html = "<ul id='$nombre' class='connectedSortable'>";
        foreach ($listaEstados as $key => $value) {
            $html .= "<li class='ui-state-highlight'>$value</li>";
        }
        $html .= "</ul>";
        return $html;
    }

    public static function ejecutarHilo($script) {
        if (PHP_OS == 'WINNT') {
            pclose(popen('start /b "bla" "C:/xampp/php/php.exe" ' . $script . ' ', "r"));
            return;
        }
        if (PHP_OS == 'Darwin') {
            $comando = '/Applications/XAMPP/bin/php ' . $script;
            print_r($comando);  
            shell_exec($comando);
            return;
        }
        shell_exec('php ' . $script);
    }

}