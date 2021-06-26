<?php

require_once('../DataAccess/PeliculasDAO.php');

class PeliculaBusiness {

    protected $PeliculasDAO;

    function __construct($con){
        $this->PeliculasDAO = new PeliculasDAO($con);
    }

    public function Add($datos){
        $entrada = $this->PeliculasDAO->save($datos);
    }
  
    public function getEntrada($id){
        $entrada = $this->PeliculasDAO->getOne($id); 

        return $entrada;
    }

    public function getEntradas($where = array()){
        $entradas = $this->PeliculasDAO->getAll($where); 

        return $entradas;
    }

    
    public function getMod($id,$datos = array()){
        $entradas = $this->PeliculasDAO->modify($id, $datos); 

        return $entradas;
    }
    public function getDestacados(){
        $entradas = $this->PeliculasDAO->destacados(); 

        return $entradas;
    }
    public function getAllAnio($condicion){
        $entradas = $this->PeliculasDAO->getAllAnio($condicion); 

        return $entradas;
    }
    public function getUltimos(){
        $entradas = $this->PeliculasDAO->getUltimos(); 

        return $entradas;
    }
    public function cambioStatus($id,$sta){
        $entradas = $this->PeliculasDAO->cambioStatus($id,$sta); 

        return $entradas;
    }

    public function contar(){
        return $this->PeliculasDAO->contar();
    }

    public function contarActivos(){
        return $this->PeliculasDAO->contarActivos();
    }

    public function contarInactivos(){
        return $this->PeliculasDAO->contarInactivos();
    }

    public function saveImage($id,$imagenes){
        var_dump($imagenes);
        $tamanhos = array(0 => array('nombre'=>'big','ancho'=>'100','alto'=>'200'),
                          1 => array('nombre'=>'small','ancho'=>'50','alto'=>'100'),
                          2 => array('nombre'=>'xl','ancho'=>'500','alto'=>'1000'));
        $ruta = DIR_BASE.'Front/imagenes/'.$id.'/';
        if(!is_dir($ruta)){
            mkdir($ruta);
        }
        $imgCant = cant_imagenes($ruta);
        if(is_array($imagenes['name'])){
            foreach($imagenes['name'] as $index=>$valor){
                redimensionar($ruta,$imagenes['name'][$index],$imagenes['tmp_name'][$index],$imgCant+$index,$tamanhos);
            }
        }else{
            redimensionar($ruta,$imagenes['name'],$imagenes['tmp_name'],$imgCant,$tamanhos);
        }
 

    }

    public function getImagenes($id){
        return obtener_imagenes('Front/imagenes/'.$id);
    }

}




?>