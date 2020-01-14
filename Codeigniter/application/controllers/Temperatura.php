<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temperatura extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
        //$this->load->model('hola');
    }

    function index(){
        //$data["datos"]= $this->temperatura_model->ver_Registros_Temperatura();
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/GraficoTemperatura.php');
        $this->load->view('encabezados/footer.php');
    }

    function GraficoTemperatura(){
        //$data["datos"]= $this->temperatura_model->ver_Registros_Temperatura();
        $this->load->view('encabezados/header.php');
        //$this->load->view('temperatura/GraficoTemperatura.php',$data);
        $this->load->view('temperatura/GraficoTemperatura.php');
        $this->load->view('encabezados/footer.php');
    }

    function TablaTemperatura(){
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/TablaTemperatura.php');
    }
}
?>