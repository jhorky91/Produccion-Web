<?php

require_once('DAO.php');
require_once('PermisosDAO.php');
require_once('../Models/PerfilEntity.php');

class PerfilDAO extends DAO{

    protected $permisoDAO;

    public function __construct($con){
        $this->table = 'perfil';
        parent::__construct($con);
        $this->permisoDAO = new PermisosDAO($con);
    }


    public function getAll($where = array()){
        $sql = "SELECT id_perfil, nombre FROM ".$this->table;
        if(!empty($where)){
            $sql .= ' WHERE '.implode(' ',$where);
        } 
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PerfilEntity');
        return $resultado;

    }

    public function getAllByUser($userId){
        $sql = "SELECT id_perfil, nombre  
                FROM perfil
                INNER JOIN usuario_perfil ON usuario_perfil.id_perfil = perfil.id_perfil
                WHERE id_usuario = ".$userId ;  
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PerfilEntity')->fetchAll();
        foreach($resultado as $index=>$perfil){
            $resultado[$index]->setPermisos($this->permisoDAO->getAllByPerfil($perfil->getId()));
        }
        return $resultado;

    }
    
    public function getOne($id){
            $sql = "SELECT id_perfil, nombre FROM $this->table WHERE id_perfil = ".$id;
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PerfilEntity')->fetch();
            //$resultado->setPermisos($this->permisoDAO->getAllByPerfil($id));

            return $resultado;
    }

    public function save($datos = array()){
        
        $sql = "INSERT INTO $this->table(nombre) VALUES ('".$datos['nombre']."')";
        $this->con->exec($sql);

    }

    public function modify($id, $datos=array()){
        
        $sql = "UPDATE $this->table SET nombre= ? WHERE id_perfil=?";
        $send = $this->con->prepare($sql);
        $send ->execute([$datos['nombre'],$id]);
        
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_perfil = $id";
        $this->con->exec($sql);
      
    }
} 


?>