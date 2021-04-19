<?php

abstract class DAO{

    protected $con;
    protected $table;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public abstract function getOne($id);

    public abstract function getAll($where = array());
    
    public abstract function save($datos = array());

    public abstract function modify($id, $datos = array());

    public abstract function delete($id);

}

?>