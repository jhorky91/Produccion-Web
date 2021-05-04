<?php
require_once('BaseEntity.php');
class ComentariosEntity extends BaseEntity{
    
    private $rank;
    private $comentario;
    private $post; //falta implementar
    private $ip;
    private $email;
    
     public function __construct(){
        parent:: __construct();
     } 

    public function setRank($rank){
        $this->rank=$rank;
    }
    public function getRank(){
        return $this->rank;
    }
    public function setComentarios($comentarios){
        $this->comentarios=$comentarios;
    }
    public function getComentarios(){
        return $this->comentarios;
    }
    public function setIp($ip){
        $this->ip=$ip;
    }
    public function getIp(){
        return $this->ip;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
}
?>