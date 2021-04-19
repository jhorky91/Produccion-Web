<?php

require_once('DAO.php');
require_once('../Modelos/ComentariosEntity.php');

class ComentariosDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'comentario';
    }

    public function getOne($id){
        $sql = "SELECT id_comentario,status,fecha,rating,titulo,comentario, id_pelicula,id_usuario FROM comentario WHERE id_comentario = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ComentarioEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id_comentario,status,fecha,rating,titulo,comentario, id_pelicula,id_usuario FROM comentario";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ComentarioEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO  comentario(status,fecha,rating,titulo,comentario, id_pelicula,id_usuario) 
        VALUES ('".$datos['status']."','NOW()','".$datos['rating']."','".$datos['titulo']."','".$datos['comentario']."'
        ,'".$datos['id_pelicula']."','".$datos['id_usuario']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE comentario SET status = '".$datos['status']."', fecha= NOW(),rating='".$datos['rating']."'
        ,titulo='".$datos['titulo']."',comentario='".$datos['comentario']."',id_pelicula='".$datos['id_pelicula']."'
        ,id_usuario='".$datos['id_usuario']."' WHERE id = ".$id;
        echo $sql;
        return $this->con->exec($sql);

    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return $this->con->exec($sql);

    }
    
}

?>