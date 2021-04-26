<?php

require_once('../DataAccess/GenerosDAO.php');

class GeneroBusiness {

    protected $GeneroDAO;

    function __construct($con){
        $GeneroDAO = new GeneroDao($con);
    }


}



?>