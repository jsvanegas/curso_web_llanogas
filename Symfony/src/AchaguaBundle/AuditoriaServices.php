<?php

namespace AchaguaBundle;

class AuditoriaServices {

    
    /**Clase a la que hace referencia un atributo
    /**
     * Conexión a la base de datos
     * @var \Doctrine\DBAL\Connection 
     */
    
    protected $conexion;
    private $sql;
    private $msgError;
    private $params = array();
    private $numFilas;
    private $lastId;
    private $secuencia;

    public function execute() {

        if (!empty($this->sql)) {
            try {
                $result = $this->conexion->executeQuery($this->sql, $this->params);
                $this->numFilas = $result->rowCount();
            } catch (DBALException $ex) {
                throw new MyException($ex->getMessage() . '  ' . $ex, -1);
            } catch (\Exception $ex) {
                throw new MyException($ex->getMessage() . '  ' . $ex, -1);
            }
            $query = $result->fetchAll(\PDO::FETCH_ASSOC);
            return $query;
        }
    }

    public function executeUpdate() {
        if (empty($this->sql)) {
            return;
        }
        try {
            $result = $this->conexion->executeUpdate($this->sql, $this->params);
            $this->numFilas = $result;

            if (strstr($this->sql, 'INSERT INTO')) {
                $this->lastId = $this->conexion->lastInsertId($this->secuencia);
                return $this->lastId;
            }
        } catch (DBALException $ex) {
            throw new MyException($ex->getMessage() . '  ' . $ex, -1);
        } catch (\Exception $ex) {
            //print_r($ex);
            throw new MyException($ex->getMessage() . '  ' . $ex, -1);
        }
        return $this->numFilas;
    }

    public function construyeSQL($accion, $tabla, $parametros, $whereUpdate = null) {
        $campos = '';
        $indices = '';
        switch (strtoupper($accion)) {
            case 'INSERT':
                foreach ($parametros as $campo => $valor) {
                    if (is_null($valor)) {
                        $indices .= ',NULL';
                    } else {
                        $indices .= ',:' . $campo;
                    }
                    $campos .= ',' . $campo;
                }

                return 'INSERT INTO ' . $tabla . '(' . trim($campos, ',') . ') VALUES(' . trim($indices, ',') . ')';
            case 'UPDATE':
                foreach ($parametros as $campo => $valor) {
                    /* if (is_null($valor)) {
                      continue;
                      } */
                    if (is_null($valor)) {
                        $campos .= ',' . $campo . '=NULL';
                    } else {
                        $campos .= ',' . $campo . ' =:' . $campo;
                    }
                }


                return 'UPDATE ' . $tabla . ' set ' . trim($campos, ',') . ' WHERE ' . trim($whereUpdate);
            case 'DELETE':
                return 'DELETE FROM ' . $tabla . ' WHERE ' . trim($whereUpdate);
        }
    }

    public function insertar($data, $tabla, $secuencia) {
        $sql = $this->construyeSQL('insert', $tabla, $data);
        $this->setSql($sql);
        $this->setsecuencia($secuencia);
        $this->setParams($data);
        $this->executeUpdate();
        return $this->lastId;
    }

    public function actualizar($data, $tabla, $condicion) {
        $sql = $this->construyeSQL('update', $tabla, $data, $condicion);
        $this->setSql($sql);
        $this->setParams($data);
        $this->executeUpdate();
        return $this->numFilas;
    }

    /**
     * método que permite la eliminación de filas  
     * Revisión: Sergio Vargas : Fecha: 15 jul 2015  
     * @param string informacion de la tabla a afectar
     * @param string cadena de condición EJ. idvalor = 1 and ..
     * @return int cantidad de filas afectadas
     * @throws Validación de condición 
     */
    public function eliminar($tabla, $condicion) {
        if (empty($condicion)) {
            throw new MyException('No se permite eliminación sin condición', -1);
        }
        $sql = $this->construyeSQL('delete', $tabla, null, $condicion);
        $this->setSql($sql);
        $this->executeUpdate();
        return $this->numFilas;
    }

    public function executeQuery($sql, $parametros = array()) {
        $this->sql = $sql;
        $this->setParametros($parametros);
        return $this->execute();
    }

    public function setSql($sql) {
        $this->sql = $sql;
    }

    public function getSql() {
        return $this->sql;
    }

    public function setConnection(&$connection) {
        $this->conexion = $connection;
    }

    public function getConnection() {
        return $this->conexion;
    }

    public function setMsgError($msgError) {
        $this->msgError = $msgError;
    }

    public function getMsgError() {
        return $this->msgError;
    }

    public function setParams($params) {
        $this->params = $params;
    }

    public function getnumFilas() {
        return $this->numFilas;
    }

    public function setnumFilas($numFilas) {
        $this->numFilas = $numFilas;
    }

    public function getlastId() {
        return $this->lastId;
    }

    public function setlastId($lastId) {
        $this->lastId = $lastId;
    }

    public function getsecuencia() {
        return $this->secuencia;
    }

    public function setsecuencia($secuencia) {
        $this->secuencia = $secuencia;
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function setConexion(&$conexion) {
        $this->conexion = $conexion;
    }

    public function setParametros($parametros) {
        $this->params = $parametros;
    }

    public function getParametros() {
        return $this->params;
    }

    /**
     * Agrega un atributo al arreglo de parámetros si existe un valor para el atributo en
     * el arreglo de información
     * @param array $informacion información de la petición.
     * @param array $parametros parametros para la consulta
     * @param strin $campo nombre del atributo del arreglo de información
     * @param string $campoTabla nombre del campo de la base de datos
     */
    protected function setCampo(array &$informacion, array &$parametros, $campo, $campoTabla) {
        if (!isset($informacion[$campo])) {
            return;
        }
        if ($informacion[$campo] === 0 || $informacion[$campo] == '0' || $informacion[$campo] == '-0') {
            $parametros[$campoTabla] = 0;
            return;
        }
        if (is_double($informacion[$campo])) {
            if (abs($informacion[$campo]) === 0) {
                $parametros[$campoTabla] = 0;
            }
        }
        $parametros[$campoTabla] = empty($informacion[$campo]) ? null : $informacion[$campo];
    }
}