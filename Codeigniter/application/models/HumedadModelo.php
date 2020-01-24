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

    function grafica_RealTime(){
        $this->load->database();
        $query = $this->db->query('select * from humedad ORDER BY fecha DESC LIMIT 1');
        foreach ($query->result_array() as $reg) {
            echo $reg['humedad'];
        }
        //return $query;
    }

    function ver_Registros_Humedad20(){
        $query = $this->db->query('SELECT * FROM humedad ORDER BY fecha DESC LIMIT 20');
        return $query;
    }
}
?>