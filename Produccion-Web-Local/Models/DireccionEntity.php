<?php 

class DireccionEntity{
    
    private $id_direccion;
    private $calle;
    private $altura;
    private $piso;
    private $dpto;
    private $barrio;

    public function __construct($id_direccion,$calle,$altura,$piso,$dpto,$barrio){
        $this->id_direccion=$id_direccion;
        $this->calle=$calle;
        $this->altura=$altura;
        $this->piso=$piso;
        $this->dpto=$dpto;
        $this->barrio=$barrio;
    }

    public function getIDDireccion(){
        return $this->id_direccion;
    }
    public function getCalle(){
        return $this->calle;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getPiso(){
        return $this->piso;
    }
    public function getDpto(){
        return $this->dpto;
    }
    public function getBarrio(){
        return $this->barrio;
    }
    
}

?>