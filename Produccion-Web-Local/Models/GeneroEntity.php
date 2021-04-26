<?php 

class GeneroEntity{
    
    private $id_genero;
    protected $status;
    protected $nombre;
    
    public function __construct($id_genero,$status,$nombre){
        $this->id_genero=$id_genero;
        $this->status=$status;
        $this->nombre=$nombre;
        
    }

    public function getIDGenero(){
        return $this->id_genero;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getNombre(){
        return $this->nombre;
    }

    
}



?>