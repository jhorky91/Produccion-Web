<?php

require_once('DAO.php');
require_once('../Modelos/GeneroEntity.php');

class GeneroDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'genero';
    }

    public function getOne($id){
        $sql = "SELECT id_genero,status,nombre FROM genero WHERE id_genero = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'GeneroEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id_genero,status,nombre FROM genero";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'GeneroEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO genero(status,nombre) VALUES ('".$datos['status']."','".$datos['nombre']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE genero SET status = '".$datos['status']."', nombre ='".$datos['nombre']."' WHERE id = ".$id;
        return $this->con->exec($sql);

    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return $this->con->exec($sql);

    }
    
}

?>