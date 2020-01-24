<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NodeModelo extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function enviar_Datos($temperatura,$humedad,$foco,$ventilador){
        echo '##'; echo '<br>';
        echo 'TEMP DE BASE: '.$temperatura; echo '<br>';
        echo 'HUMEDAD DE BASE: '.$humedad; echo '<br>';
        echo 'FOCO: '.$foco; echo '<br>';
        echo 'VENTILADOR: '.$ventilador; echo '<br>';
        $this->load->database();
        $this->db->query('INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),'.$temperatura.');');
        $this->db->query('INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),'.$humedad.');');
    }
}
?>