<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temperatura extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
        $this->load->model('temperaturaModelo');
        $this->load->database();

    }

    function index(){
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/GraficoTemperatura.php');
        $this->load->view('encabezados/footer.php');
    }

    function GraficoTemperatura(){
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/GraficoTemperatura.php');
        $this->load->view('encabezados/footer.php');
    }

    function TablaTemperatura(){
        $data["datos"]= $this->temperaturaModelo->ver_Registros_Temperatura();
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/TablaTemperatura.php',$data);
    }

}
?>