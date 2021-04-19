<?php

require_once('DAO.php');
require_once('../Modelos/ClasificacionEntity.php');

class ClasifDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'clasificacion';
    }

    public function getOne($id){
        $sql = "SELECT id_clasificacion,status,nombre,descripcion FROM clasificacion WHERE id_clasificacion = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ClasificacionEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id_clasificacion,status,nombre,descripcion FROM clasificacion";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ClasificacionEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO clasificacion(status,nombre,descripcion)
                VALUES ('".$datos['status']."','".$datos['nombre']."','".$datos['descripcion']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE clasificacion SET status = '".$datos['status']."',nombre = '".$datos['nombre']."',descripcion = '".$datos['descripcion']."' WHERE id_clasificacion = ".$id;
        echo $sql;
        return $this->con->exec($sql);

    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_clasificacion = $id";
        return $this->con->exec($sql);

    }
    
}

?>