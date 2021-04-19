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

    public function setRank(){
        $this->rank=$rank;
    }
    public function getRank(){
        return $this->rank;
    }
    public function setComentarios(){
        $this->comentarios=$comentarios;
    }
    public function getComentarios(){
        return $this->comentarios;
    }
    public function setIp(){
        $this->ip=$ip;
    }
    public function getIp(){
        return $this->ip;
    }
    public function setEmail(){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
}
?>