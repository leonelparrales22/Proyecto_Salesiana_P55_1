<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HumedadModelo extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function ultimos_Registros(){
        $query = $this->db->query('SELECT * FROM `humedad` ORDER BY `id_humedad` DESC LIMIT 20');
        return $query;
    }

    function ver_Registros_Humedad(){
        $query = $this->db->query('SELECT * FROM humedad');
        return $query;
    }
}
?>