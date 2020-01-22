<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PresionModelo extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function ultimos_Registros(){
        $query = $this->db->query('SELECT * FROM `presion` ORDER BY `id_presion` DESC LIMIT 20');
        return $query;
    }

    function ver_Registros_Presion(){
        $query = $this->db->query('SELECT * FROM presion');
        return $query;
    }

    function grafica_RealTime(){
        $this->load->database();
        $query = $this->db->query('select * from presion ORDER BY fecha DESC LIMIT 1');
        foreach ($query->result_array() as $reg) {
            echo $reg['presion'];
        }
        //return $query;
    }
}
?>