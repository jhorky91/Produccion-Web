<?php
class BaseEntity{
    protected $id;
    protected $fechaCreacion;
    protected $fechaModificacion;

    public function __construct($id,$fechaCreacion,$fechaModificacion){
        $this->id=$id;
        $this->fechaCreacion=$fechaCreacion;
        $this->fechaModificacion=$fechaModificacion;
    } 
     

    public function setID($id){
        $this->id=$id;
    }

    public function getID(){
        return $this->id;
    }

    public function setFechaCreacion($fechaCreacion){
        $this->fechaCreacion=$fechaCreacion;
    }

    public function getFechaCreacion(){
        return $this->fechaCreacion;
    }

    public function setFechaModificacion($fechaModificacion){
        $this->fechaModificacion=$fechaModificacion;
    }

    public function getFechaModificacion(){
        return $this->fechaModificacion;
    }

}
?>