<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hola extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function ver_Registros_Temperatura(){
        $this->db->select('*');
        $this->db->where('id', '3');
        $this->db->order_by('id_temperatura','desc');
        $this->db->limit(20);
        $q = $this->db->get('temperatura');
        $data = $q->result_array();
        $palabra='';
        while ($reg = mysqli_fetch_array($data)) {
            $palabra= $palabra.$reg['temperatura'].",";
        }
        return $palabra;
    }
}
?>