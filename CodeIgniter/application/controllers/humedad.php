<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Humedad extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
        $this->load->model('humedadModelo');
        $this->load->database();
    }

    function GraficoHumedad(){
        $this->load->view('encabezados/header.php');
        $this->load->view('humedad/GraficoHumedad.php');
        $this->load->view('encabezados/footer.php');
    }

    function TablaHumedad(){
        $data["datos"]= $this->humedadModelo->ver_Registros_Humedad();
        $this->load->view('encabezados/header.php',$data);
        $this->load->view('humedad/TablaHumedad.php');
    }
}
?>