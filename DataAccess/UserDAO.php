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
        if($where['tipo'] == 'Admin'){
            $sql = "SELECT U.id_usuario, U.status, U.nombre, U.apellido, U.fecha, U.usuario, U.pass, U.email FROM $this->table U
            INNER JOIN usuario_perfil UP on U.id_usuario= UP.id_usuario
            INNER JOIN perfil P on UP.id_perfil= P.id_perfil
            WHERE P.nombre = 'Admin' ";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetchAll();
            return $resultado;
        } else {
            $sql = "SELECT U.id_usuario, U.status, U.nombre, U.apellido, U.fecha, U.fecha_nac, U.usuario, U.pass, U.email, U.telefono, U.pedidos, U.dinero_gastado FROM $this->table U
            INNER JOIN usuario_perfil UP on U.id_usuario= UP.id_usuario
            INNER JOIN perfil P on UP.id_perfil= P.id_perfil
            WHERE P.nombre = 'Cliente'";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetchAll();
            return $resultado;
        }

    }

    public function save($datos = array()){
   /*      if($datos['perfil']=='Admin'){ */
            $sql = "INSERT INTO $this->table(status, nombre, apellido, fecha, fecha_nac, usuario, pass, email, telefono, pedidos, dinero_gastado) 
                    VALUES ('".$datos['status']."','".$datos['nombre']."','".$datos['apellido']."',NOW(),'".$datos['fecha_nac']."',
                            '".$datos['usuario']."','".$datos['pass']."','".$datos['email']."',NULL,NULL,NULL)";
                    $this->con->exec($sql);
                $id = $this->con->lastInsertId();

            foreach($datos['perfil']['perfil'] as $per){        
                $sql = "INSERT INTO usuario_perfil(id_usuario, id_perfil) 
                        VALUES ($id,$per)";
                        $this->con->exec($sql);        
            }
/* 
        }else{
            $sql = "INSERT INTO $this->table(status, nombre, apellido, fecha, fecha_nac, usuario, pass, email, telefono, pedidos, dinero_gastado) 
                VALUES ('".$datos['status']."','".$datos['nombre']."','".$datos['apellido']."',NOW(),'".$datos['fecha_nac']."',
                        '".$datos['usuario']."','".$datos['pass']."','".$datos['email']."','".$datos['telefono']."',NULL,NULL)";
                $this->con->exec($sql);
             $id = $this->con->lastInsertId();
                
            $sql = "INSERT INTO usuario_perfil(id_usuario, id_perfil) 
                    VALUES ($id,2)";
                    $this->con->exec($sql);    
        } */
    }

    public function modify($id, $datos = array()){
        if($datos['perfil']=='Admin'){
        $sql = "UPDATE $this->table SET status='".$datos['status']."',
                                        nombre = '".$datos['nombre']."',
                                        apellido = '".$datos['apellido']."',
                                        fecha = NOW(),
                                        fecha_nac ='".$datos['fecha_nac']."', 
                                        usuario = '".$datos['usuario']."',
                                        pass = '".$datos['pass']."',
                                        email ='".$datos['email']."' 
                WHERE id_usuario = $id";
                $this->con->exec($sql);
        }else{
            $sql = "UPDATE $this->table SET status='".$datos['status']."',
                                        nombre = '".$datos['nombre']."',
                                        apellido = '".$datos['apellido']."',
                                        fecha = NOW(),
                                        fecha_nac ='".$datos['fecha_nac']."', 
                                        usuario = '".$datos['usuario']."',
                                        pass = '".$datos['pass']."',
                                        email ='".$datos['email']."',
                                        telefono ='".$datos['telefono']."'
                WHERE id_usuario = $id";
                $this->con->exec($sql);
        }
    }

    public function delete($id){
        $sql1 = "DELETE FROM usuario_perfil WHERE id_$this->table = $id";
        $this->con->exec($sql1);
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        $this->con->exec($sql);
    }
   
    
    public function userAdmin($datos = array()){
        $sql = "SELECT U.nombre, U.apellido, U.usuario, U.pass, U.email FROM $this->table U
        INNER JOIN usuario_perfil UP on U.id_usuario= UP.id_usuario
        INNER JOIN perfil P on UP.id_perfil= P.id_perfil
        WHERE U.usuario ='".$datos['adminuser']."' AND U.pass='".$datos['adminpass']."' AND P.nombre='Admin' AND U.status=1 ";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetch();
        return $resultado;

    }

    public function userCliente($datos = array()){
        $sql = "SELECT U.id_usuario, U.nombre, U.apellido, U.usuario, U.pass, U.email FROM $this->table U
        INNER JOIN usuario_perfil UP on U.id_usuario= UP.id_usuario
        INNER JOIN perfil P on UP.id_perfil= P.id_perfil
        WHERE U.usuario ='".$datos['user']."' AND U.pass='".$datos['pass']."' AND P.nombre='Cliente' AND U.status=1 ";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetch();
        return $resultado;

    }
    
}

?>