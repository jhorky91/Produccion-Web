<?php 

class ComentarioEntity{
    
    private $id_comentario;
    private $status;
    private $fecha;
    private $rating;
    private $titulo;
    private $comentario;
    private $id_pelicula;
    private $id_usuario;

    public function __construct($id_comentario,$status,$fecha,$rating,$titulo,$comentario,$id_pelicula,$id_usuario){
        $this->id_comentario=$id_comentario;
        $this->status=$status;
        $this->fecha=$fecha;
        $this->rating=$rating;
        $this->titulo=$titulo;
        $this->comentario=$comentario;
        $this->id_pelicula=$id_pelicula;
        $this->id_usuario=$id_usuario;
    }

    public function getIDComentario(){
        return $this->id_comentaio;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getRating(){
        return $this->rating;
    }
    public function getTitulo(){
        return $this->titulo;
    }

    public function getComentario(){
        return $this->comentario;
    }
    public function getIDPelicula(){
        return $this->id_pelicula;
    }
    public function getIDUsuario(){
        return $this->id_usuario;
    }


    


}



?>