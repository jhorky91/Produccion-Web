<?php

require_once('DAO.php');
require_once('../Modelos/UserEntity.php');

class UserDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'users';
    }

    public function getOne($id){
        $sql = "SELECT id,fechaCreacion,fechaModificacion,nombre,email FROM users WHERE id = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UserEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id,fechaCreacion,fechaModificacion,nombre,email FROM users";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UserEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO users(nombre,email) VALUES ('".$datos['nombre']."','".$datos['email']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE users SET nombre = '".$datos['nombre']."', email ='".$datos['email']."', fechaModificacion = NOW() WHERE id = ".$id;
        echo $sql;
        return $this->con->exec($sql);

    }

   
    
}

?>