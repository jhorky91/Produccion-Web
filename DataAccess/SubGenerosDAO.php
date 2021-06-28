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
        $sql = "SELECT id_subgenero,status,nombre FROM $this->table WHERE id_subgenero = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubGeneroEntity')->fetch();
        return $resultado;

    }

    public function getOneIDPeli($id){
        $sql = "SELECT DISTINCT SG.id_subgenero, SG.nombre FROM $this->table SG
        INNER JOIN genero_subgenero GS ON SG.id_subgenero = GS.id_subgenero
        INNER JOIN pelicula_genero PG ON GS.id_genero_subgenero = PG.id_genero_subgenero
        WHERE SG.status=1 AND PG.id_pelicula=".$id;
        return $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubgeneroEntity')->fetchAll();
        
    }

    public function getAll($where = array()){
        $sgen=array();
        if(isset($where['genero']) && !empty($where['genero'])){
            $sgen[]=' AND GS.id_genero = '.$where['genero'];
        }
        if(isset($where['subgenero']) && !empty($where['subgenero'])){
            $sgen[]=' AND GS.id_subgenero = '.$where['subgenero'].'
                      AND GS.id_subgenero != '.$where['subgenero'];
        }

        $sWhereStr='';
        if(!empty($sgen)) { $sWhereStr=' '. implode(' ',$sgen);
        }

        $sql = "SELECT DISTINCT SG.id_subgenero,SG.status,SG.nombre FROM $this->table SG 
        INNER JOIN genero_subgenero GS ON SG.id_subgenero= GS.id_subgenero
        WHERE 1+1 ".$sWhereStr." ORDER BY nombre";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'SubGeneroEntity')->fetchAll();
        return $resultado;

    }

    public function generoSubgenero($id){
        
        $sql = "SELECT g.id_genero, g.nombre FROM genero g INNER JOIN genero_subgenero gs ON g.id_genero = gs.id_genero 
        WHERE gs.id_subgenero = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'GeneroEntity')->fetchAll();
        return $resultado;
    }


    public function save($datos = array(), $generos = array()){

        $sql1 = "INSERT INTO $this->table(status,nombre) VALUES ('".$datos['status']."','".$datos['nombre']."')";
        $this->con->exec($sql1);
        $id = $this->con->lastInsertId();
        foreach($generos as $gen) {
        $sql2 = "INSERT INTO genero_subgenero(id_genero, id_subgenero) VALUES ('".$gen."',".$id.")";
        $this->con->exec($sql2);
        }
    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE $this->table SET status = '".$datos['status']."', nombre ='".$datos['nombre']."' WHERE id = ".$id;
        return $this->con->exec($sql);

    }
    public function delete($id){
        $sql1 = "DELETE FROM genero_subgenero WHERE id_subgenero = $id";
        $this->con->exec($sql1);
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        return $this->con->exec($sql);
    }

   
    
}

?>