<?php 

class ClasificacionEntity{
    
    private $id_clasificacion;
    private $status;
    private $nombre;
    private $descripcion;

    public function __construct($id_clasificacion,$status,$nombre,$descripcion){
        $this->id_clasificacion=$id_clasificacion;
        $this->status=$status;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
    }

    public function getIDClasificacion(){
        return $this->id_clasificacion;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    
}



?>