<?php 

require_once('GeneroEntity.php');

class SubGeneroEntity extends GeneroEntity{
    
    private $id_subgenero;
    
    
    public function __construct($id_subgenero,$status,$nombre){
        $this->id_subgenero=$id_subgenero;
        parent::setStatus($status);
        parent::setNombre($nombre);
        
    }

    public function getIDSubGenero(){
        return $this->id_subgenero;
    }
    public function getStatus(){
        return parent::getStatus();;
    }
    public function getNombre(){
        return parent::getNombre();;
    }
    
    
}



?>