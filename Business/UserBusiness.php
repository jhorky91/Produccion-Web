<?php

require_once('../DataAccess/UserDAO.php');

class UserBusiness {

    protected $UserDAO;

    function __construct($con){
        $this->UserDAO = new UserDAO($con);
    }
    
    public function getEntradas(){
        $entradas = $this->UserDAO->getAll(); 

        return $entradas;
    }

}



?>