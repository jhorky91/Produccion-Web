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
        $sql = "SELECT id_subgenero,status,nombre FROM $this->table WHERE id_subgenero = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubGeneroEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id_subgenero,status,nombre FROM $this->table";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubGeneroEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO $this->table(status,nombre) VALUES ('".$datos['status']."','".$datos['nombre']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE $this->table SET status = '".$datos['status']."', nombre ='".$datos['nombre']."' WHERE id = ".$id;
        return $this->con->exec($sql);

    }

   
    
}

?>