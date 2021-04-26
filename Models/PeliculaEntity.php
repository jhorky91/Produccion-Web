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
    
    public function __construct(){
        $this->gener=array();
        $this->sgener=array();
        $this->comentarios=array();
    }

    
    public function getID(){
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
    public function getComentarios(){
        return $this->$comentarios;
    }


    public function setID(){
        $this->id_pelicula=$id_pelicula;
    }
    public function setStatus(){
        $this->status=$status;
    }
    public function setNombre(){
        $this->nombre=$nombre;
    }
    public function setPrecio(){
        $this->precio=$precio;
    }
    public function setIDClasificacion(){
        $this->id_clasificacion=$id_clasificacion;
    }
    public function setDuracion(){
        $this->duracion=$duracion;
    }
    public function setAnio(){
        $this->anio=$anio;
    }
    public function setDirectores(){
        $this->directores=$directores;
    }
    public function setActores(){
        $this->actores=$actores;
    }
    public function setDescripcion(){
        $this->descripcion=$descripcion;
    }
    public function setGenero(){
        $this->gener=$gener;
    }
    public function setSGen(){
        $this->$sgen=$sgen;
    }
    public function setComentarios(){
        $this->$comentarios=$comentarios;
    }


}

?>