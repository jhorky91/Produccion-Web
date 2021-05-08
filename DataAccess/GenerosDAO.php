<?php

require_once('DAO.php');
require_once('../Models/GeneroEntity.php');

class GeneroDAO extends DAO{
    

    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'genero';
    }

    public function getOne($id){
        $sql = "SELECT id_genero,status,nombre FROM $this->table WHERE status=1 AND id_genero = $id";
        return $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'GeneroEntity')->fetch();
         
        
    }
    public function getOneIDPeli($id){
        $sql = "SELECT G.id_genero, G.nombre FROM genero G
        INNER JOIN genero_subgenero GS ON G.id_genero = GS.id_genero
        INNER JOIN pelicula_genero PG ON GS.id_genero_subgenero = PG.id_genero_subgenero
        WHERE G.status=1 AND PG.id_pelicula=".$id;
        return $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'GeneroEntity')->fetchAll();
    }

    public function getAll($where = array()){
        $gen= array();
        
        if(isset($_GET['genero']) && !empty($_GET['genero'])){
            $gen[]=' AND GS.id_genero = '.$_GET['genero'].' 
                     AND GS.id_genero != '.$_GET['genero'];
        }
        if(isset($_GET['subgenero']) && !empty($_GET['subgenero'])){
            $gen[]=' AND GS.id_subgenero = '.$_GET['subgenero'];
        }
        
        $sWhereStr='';
        if(!empty($gen)) { $sWhereStr=' '. implode(' ',$gen);
        }

        $sql = "SELECT DISTINCT G.id_genero,G.status,G.nombre FROM $this->table G
        INNER JOIN genero_subgenero GS ON G.id_genero = GS.id_genero
        WHERE status=1 ".$sWhereStr." ORDER BY nombre ";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'GeneroEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO $this->table(status,nombre) VALUES ('".$datos['status']."','".$datos['nombre']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos=array()){
        
        $sql = "UPDATE $this->table SET status= ?,nombre=? WHERE id_genero=?";
        $send = $this->con->prepare($sql);
        $send ->execute([$datos['status'],$datos['nombre'],$id]);
        
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        return $this->con->exec($sql);
    }

    
    
}

?>