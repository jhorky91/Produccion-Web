<?php
require_once('BaseEntity.php');

class PostEntity extends BaseEntity{
    
    private $titulo;
    private $entrada;
    private $autor;
    private $categoria;
    private $comentarios;
    private $etiquetas;
    
     public function __construct($id,$fechaCreacion,$fechaModificacion,$titulo,$entrada,$autor,$categoria,$comentarios,$etiquetas){
        parent:: __construct($id,$fechaCreacion,$fechaModificacion);
        $this->comentarios=array();
        $this->etiquetas=array();
        $this->titulo=$titulo;
        $this->entrada=$entrada;
        $this->autor=$autor;
        $this->categoria=$categoria;
        $this->comentarios=$comentarios;
        $this->etiquetas=$etiquetas;
     } 
    
    

    public function getTitulo(){
        return $this->titulo;
    }
    
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    
    public function setEntrada($entrada){
        $this->entrada=$entrada;
    }
    public function getEntrada(){
        return $this->entrada;
    }
    public function setAutor($autor){
        $this->autor=$autor;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setCategoria($categoria){
        $this->categoria=$categoria;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setComentarios($comentarios){
        $this->comentarios=$comentarios;
    }
    public function getComentarios(){
        return $this->comentarios;
    }
    public function setEtiquetas($etiquetas){
        $this->etiquetas=$etiquetas;
    }
    public function getEtiquetas(){
        return $this->etiquetas;
    }
}
?>