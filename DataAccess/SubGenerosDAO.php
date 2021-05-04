<?php

require_once('DAO.php');
require_once('../Models/SubGeneroEntity.php');

class SubGeneroDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'subgenero';
    }

    public function getOne($id){
        $sql = "SELECT id_subgenero,status,nombre FROM $this->table WHERE status=1 AND id_subgenero = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubGeneroEntity')->fetch();
        return $resultado;

    }

    public function getOneIDPeli($id){
        $sql = "SELECT SG.id_subgenero, SG.nombre FROM $this->table SG
        INNER JOIN genero_subgenero GS ON SG.id_subgenero = GS.id_subgenero
        INNER JOIN pelicula_genero PG ON GS.id_genero_subgenero = PG.id_genero_subgenero
        WHERE SG.status=1 AND PG.id_pelicula=".$id;
        return $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubgeneroEntity')->fetchAll();
        
    }

    public function getAll($where = array()){

        $sql = "SELECT id_subgenero,status,nombre FROM $this->table WHERE status=1 ORDER BY nombre";
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
    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        return $this->con->exec($sql);
    }

   
    
}

?>