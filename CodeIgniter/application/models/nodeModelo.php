<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NodeModelo extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function enviar_Datos($temperatura,$humedad){
        $this->load->database();
        $data = array(
            'id_temperatura' => null
            'fecha' => CURRENT_TIMESTAMP
            'temperatura' => $temperatura
        );
        $this->db->insert('TEMPERATURA', $data);
        
    
        //$this->db->query('INSERT INTO TEMPERATURA(`id_temperatura`, `fecha`, `temperatura`) VALUES (null,CURRENT_TIMESTAMP,'$temperatura')');
        //$this->db->query('INSERT INTO HUMEDAD(`id_humedad`, `fecha`, `humedad`) VALUES (null,CURRENT_TIMESTAMP,'$humedad')');
    }
}
?>