<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temperatura_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function leer_Registros(){
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/bienvenido.php');
        $this->load->view('encabezados/footer.php');
    }
}
?>