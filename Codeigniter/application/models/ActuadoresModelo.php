<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActuadoresModelo extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function estado_Foco(){
        $query = $this->db->query('SELECT * FROM `activadores` WHERE nombre="FOCO"');    
        return $query;
    }

    function FocoOn(){
        $this->db->query('UPDATE activadores SET estado=true WHERE nombre="FOCO";');
        $this->db->query('INSERT INTO registro (fecha,descripcion) VALUES(CURRENT_TIMESTAMP(),"FOCO SE ENCENDIO");');
    }

    function FocoOff(){
        $this->db->query('UPDATE activadores SET estado=false WHERE nombre="FOCO";');
        $this->db->query('INSERT INTO registro (fecha,descripcion) VALUES(CURRENT_TIMESTAMP(),"FOCO SE APAGÓ");');
    }

    function VentiladorOn(){
        $this->db->query('UPDATE activadores SET estado=true WHERE nombre="FOCO";');
        $this->db->query('INSERT INTO registro (fecha,descripcion) VALUES(CURRENT_TIMESTAMP(),"FOCO SE ENCENDIO");');
    }

    function VentiladorOff(){
        $this->db->query('UPDATE activadores SET estado=false WHERE nombre="FOCO";');
        $this->db->query('INSERT INTO registro (fecha,descripcion) VALUES(CURRENT_TIMESTAMP(),"FOCO SE APAGÓ");');
    }
?>