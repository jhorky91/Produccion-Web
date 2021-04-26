<?php 

class PeliculaEntity{
    
    private $id_pelicula;
    private $status;
    private $nombre;
    private $precio;
    private $id_clasificacion;
    private $duracion;
    private $anio;
    private $directores;
    private $actores;
    private $descripcion;

    private $gener;
    private $sgener;

    private $comentarios; //array
    
    public function __construct(){}

    public function setter($status,$nombre,$precio,$id_clasificacion,$duracion,$anio,$directores,$actores,$descripcion,$gener,$sGen){
      
        $this->status=$status;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->id_clasificacion=$id_clasificacion;
        $this->duracion=$duracion;
        $this->anio=$anio;
        $this->directores=$directores;
        $this->actores=$actores;
        $this->descripcion=$descripcion;
        $this->gener=array();
        $this->gener=$gener;
        $this->sgener=array();
        $this->sgener=$sGen;

        $this->comentarios=array();
        
    }

    public function getIDPelicula(){
        return $this->id_pelicula;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getIDClasificacion(){
        return $this->id_clasificacion;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function getDirectores(){
        return $this->directores;
    }
    public function getActores(){
        return $this->actores;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getGenero(){
        return $this->gener;
    }
    public function getSGen(){
        return $this->$sgen;
    }

}

?>