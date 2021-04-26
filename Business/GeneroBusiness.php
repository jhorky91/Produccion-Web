<?php

require_once('../DataAccess/GenerosDAO.php');

class GeneroBusiness {

    protected $GeneroDAO;

    function __construct($con){
        $this->GeneroDAO = new GeneroDAO($con);
    }
    
    public function getEntradas(){
        $entradas = $this->GeneroDAO->getAll(); 

        return $entradas;
    }

}



?>