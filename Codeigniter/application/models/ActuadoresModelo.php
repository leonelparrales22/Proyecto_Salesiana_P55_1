<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActuadoresModelo extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function estado_Foco(){
        $query = $this->db->query('SELECT * FROM `activadores` WHERE nombre="FOCO"');
        //foreach ($query->result_array() as $reg) {
        //    echo $reg['humedad'];
        //}
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
}
?>