<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HumedadModelo extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function ver_Registros_Humedad(){
        $query = $this->db->query('SELECT * FROM humedad');
        return $query;
    }
}
?>