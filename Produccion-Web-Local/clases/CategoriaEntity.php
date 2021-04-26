<?php
require_once('BaseEntity.php');
class CategoriaEntity extends BaseEntity{
    
    private $nombre;
    private $padre;
    
    
     public function __construct(){
        parent:: __construct();
     } 

    public function setNombre(){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setPadre(){
        $this->padre=$padre;
    }
    public function getPadre(){
        return $this->padre;
    }
}
?>