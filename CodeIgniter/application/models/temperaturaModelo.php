<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemperaturaModelo extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function ver_Registros_Temperatura(){
        $query = $this->db->query('SELECT * FROM temperatura');
        return $query;
    }
}
?>