<?php
require_once('BaseEntity.php');
class CategoriaEntity extends BaseEntity{
    
    private $nombre;
    
    public function __construct(){
        parent:: __construct();
     } 

    public function setNombre(){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    
}
?>