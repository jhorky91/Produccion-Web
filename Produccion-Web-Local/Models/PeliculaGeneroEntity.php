<?php 

require_once('GeneroEntity.php');
require_once('SubGeneroEntity.php');

class PeliculaGeneroEntity{

   


    private $id_pelicula_genero;
    private $id_genero;
    private $id_subgenero;
    private $id_pelicula;
    
    public function __construct($id_pelicula_genero,$id_genero,$id_subgenero,$id_pelicula){
        
        $this->id_pelicula_genero=$id_pelicula_genero;
        $this->id_genero= $id_genero;
        $this->id_subgenero= $id_subgenero;
        $this->id_pelicula=$id_pelicula;
        
    }

    public function getIDPeliculaGenero(){
        return $this->id_pelicula_genero;
    }
    public function getIDGenero(){
        return $this->id_genero;
    }
    public function getIDSUbgenero(){
        return $this->id_subgenero;
    }
    public function getIDPelicula(){
        return $this->id_pelicula;
    }
    
}



?>