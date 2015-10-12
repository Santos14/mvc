<?php

class ModelEmpleado{
    private $db;
    private $personas;
    
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->personas=array();
    }
    
    
}