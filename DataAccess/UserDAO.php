<?php

require_once('DAO.php');
require_once('../Models/UsuarioEntity.php');

class UserDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'usuario';
    }

    public function getOne($id){
        $sql = "SELECT id_usuario, status, nombre, apellido, fecha, fecha_nac, usuario, pass, email, telefono, pedidos, dinero_gastado FROM $this->table WHERE id_usuario = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id_usuario, status, nombre, apellido, fecha, fecha_nac, usuario, pass, email, telefono, pedidos, dinero_gastado FROM $this->table";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO $this->table(nombre,email) VALUES ('".$datos['nombre']."','".$datos['email']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE $this->table SET nombre = '".$datos['nombre']."', email ='".$datos['email']."', fechaModificacion = NOW() WHERE id = ".$id;
        echo $sql;
        return $this->con->exec($sql);

    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        return $this->con->exec($sql);
    }
   
    
    public function userAdmin($datos = array()){
        $sql = "SELECT U.nombre, U.apellido, U.usuario, U.pass, U.email FROM $this->table U
        INNER JOIN usuario_perfil UP on U.id_usuario= UP.id_usuario
        INNER JOIN perfil P on UP.id_perfil= P.id_perfil
        WHERE U.usuario ='".$datos['adminuser']."' AND U.pass='".$datos['adminpass']."' AND P.nombre='Admin' ";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetch();
        return $resultado;

    }

    public function userCliente($datos = array()){
        $sql = "SELECT U.id_usuario, U.nombre, U.apellido, U.usuario, U.pass, U.email FROM $this->table U
        INNER JOIN usuario_perfil UP on U.id_usuario= UP.id_usuario
        INNER JOIN perfil P on UP.id_perfil= P.id_perfil
        WHERE U.usuario ='".$datos['user']."' AND U.pass='".$datos['pass']."' AND P.nombre='Cliente' ";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetch();
        return $resultado;

    }
    
}

?>