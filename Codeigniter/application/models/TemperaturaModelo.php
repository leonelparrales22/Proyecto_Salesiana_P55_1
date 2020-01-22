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

    function ultimos_Registros(){
        $query = $this->db->query('SELECT * FROM `temperatura` ORDER BY `id_temperatura` DESC LIMIT 20');
        return $query;
    }

    function grafica_RealTime(){
        $this->load->database();
        $query = $this->db->query('select * from temperatura ORDER BY fecha DESC LIMIT 1');
        foreach ($query->result_array() as $reg) {
            echo $reg['temperatura'];
        }
        //return $query;
    }

    }
    
?>