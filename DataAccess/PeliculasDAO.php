<?php

require_once('DAO.php');
require_once('../Models/PeliculaEntity.php');

class PeliculasDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'pelicula';
    }

    public function getOne($id){
        $sql = "SELECT id_pelicula,status,nombre,precio,id_clasificacion,duracion,anio,directores,actores,descripcion FROM $this->table WHERE id = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PeliculaEntity')->fetch();
        return $resultado;
        

    }

    public function getAll($where = array()){

        $sql = "SELECT id_pelicula,status,nombre,precio,id_clasificacion,duracion,anio,directores,actores,descripcion FROM $this->table";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PeliculaEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO $this->table(status,nombre,precio,id_clasificacion,duracion,anio,directores,actores,descripcion)
                 VALUES ('".$datos['status']."','".$datos['nombre']."','".$datos['precio']."','".$datos['id_clasificacion']."','".$datos['duracion']."','".$datos['anio']."','".$datos['directores']."','".$datos['actores']."','".$datos['descripcion']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE $this->table SET 
                status = '".$datos['status']."',
                nombre ='".$datos['nombre']."',
                precio = '".$datos['precio']."',
                id_clasificacion = '".$datos['id_clasificacion']."',
                duracion = '".$datos['duracion']."',
                anio = '".$datos['anio']."',
                directores = '".$datos['directores']."',
                actores = '".$datos['actores']."',
                descripcion '".$datos['descripcion']."' 
                    WHERE id = ".$id;
        return $this->con->exec($sql);

    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        return $this->con->exec($sql);
    }

    
    
}

?>