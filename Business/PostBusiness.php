<?php

require_once('../DataAccess/PostDAO.php');

class PostBusiness{

    protected $PostDao;

    function __construct($con){
        $this->PostDao = new PostDAO($con);
    }

    public function getEntradas(){
        $entradas = $this->PostDao->getAll(); 

        return $entradas;
    }

}