<?php

require_once('DAO.php');
require_once('../Models/ComentarioEntity.php');

class ComentariosDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'comentario';
    }

    public function getOne($id){
        $sql = "SELECT id_comentario,status,fecha,rating,titulo,comentario, id_pelicula,id_usuario FROM $this->table WHERE id_comentario = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ComentarioEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id_comentario,status,fecha,rating,titulo,comentario, id_pelicula,id_usuario FROM $this->table WHERE status=1";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ComentarioEntity')->fetchAll();
        return $resultado;

    }

        
    public function getAllIDUser($id){

        $sql = "SELECT * FROM $this->table WHERE status=1 AND id_usuario=".$id;
        return $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ComentarioEntity')->fetchAll();   

    }

    public function getAllIDPeli($id){

        $sql = "SELECT * FROM $this->table WHERE status=1 AND id_pelicula=".$id;
        return $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ComentarioEntity')->fetchAll();   

    }

    public function save($datos = array()){

        $sql = "INSERT INTO $this->table (status,rating,titulo,comentario, id_pelicula,id_usuario) 
        VALUES ('0','".$datos['rating']."','".$datos['titulo']."','".$datos['comentario']."'
        ,'".$datos['id_pelicula']."','".$datos['id_usuario']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE $this->table SET status = '".$datos['status']."', fecha= NOW(),rating='".$datos['rating']."'
        ,titulo='".$datos['titulo']."',comentario='".$datos['comentario']."',id_pelicula='".$datos['id_pelicula']."'
        ,id_usuario='".$datos['id_usuario']."' WHERE id_comentario = ".$id;
        
        return $this->con->exec($sql);

    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        return $this->con->exec($sql);
    }

    public function calRating($id){
        $sql = "SELECT ROUND(AVG(rating),1) AS rating FROM $this->table WHERE status=1 AND id_pelicula =".$id;
        return $this->con->query($sql,PDO::FETCH_CLASS,'ComentarioEntity')->fetch();
    }
    
}

?>