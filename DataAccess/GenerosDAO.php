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
        $sql = "SELECT id_genero,status,nombre FROM $this->table WHERE id_genero = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'GeneroEntity')->fetch();
        return $resultado;

    }

    public function getAll($where = array()){

        $sql = "SELECT id_genero,status,nombre FROM $this->table";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'GeneroEntity')->fetchAll();
        return $resultado;

    }

    public function save($datos = array()){

        $sql = "INSERT INTO $this->table(status,nombre) VALUES ('".$datos['status']."','".$datos['nombre']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos=array()){
        /* $sql = "UPDATE $this->table SET status = '".$datos['status']."', nombre ='".$datos['nombre']."' WHERE id_genero = ".$id;
        return $this->con->exec($sql);  */

        $sql = "UPDATE $this->table SET status= ?,nombre=? WHERE id_genero=?";
        $send = $this->con->prepare($sql);
        $send ->execute([$datos['status'],$datos['nombre'],$id]);
        /*$send -> bindParam(1,$status,PDO::PARAM_INT);
        $send -> bindParam(2,$nombre,PDO::PARAM_STR);
        $send -> bindParam(3,$id,PDO::PARAM_INT);
        
        $send->execute();
        $result= $send ->fetchAll(PDO::FETCH_ASSOC); */
        

        /* echo $id;
        echo $status;
        echo $nombre; */
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        return $this->con->exec($sql);
    }

    
    
}

?>