<?php

require_once('DAO.php');
require_once('../Modelos/SubGeneroEntity.php');

class SubGeneroDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'subgenero';
    }

    public function getOne($id){
        $sql = "SELECT id_subgenero,status,nombre FROM subgenero WHERE id_subgenero = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubGeneroEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id_subgenero,status,nombre FROM subgenero";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubGeneroEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO subgenero(status,nombre) VALUES ('".$datos['status']."','".$datos['nombre']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE subgenero SET status = '".$datos['status']."', nombre ='".$datos['nombre']."' WHERE id = ".$id;
        return $this->con->exec($sql);

    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return $this->con->exec($sql);

    }
    
}

?>