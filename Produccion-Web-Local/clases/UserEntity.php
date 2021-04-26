<?php
require_once('BaseEntity.php');
class UserEntity extends BaseEntity{
    
    private $email;
    private $nombre;
    
     public function __construct(){
        parent:: __construct();
     } 

    public function setEmail(){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setNombre(){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
}
?>