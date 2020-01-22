<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presion extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
        $this->load->model('PresionModelo');
        $this->load->database();
    }

    function GraficoPresion(){
        $data["datos"]= $this->PresionModelo->ultimos_Registros();
        $this->load->view('encabezados/header.php');
        $this->load->view('presion/GraficoPresion.php',$data);
        $this->load->view('encabezados/footer.php');
    }

    function TablaPresion(){
        $data["datos"]= $this->PresionModelo->ver_Registros_Presion();
        $this->load->view('encabezados/header.php');
        $this->load->view('presion/TablaPresion.php',$data);
    }

    function llamadaBase(){
        $this->load->view('presion/BDDPresion.php');
    }
}
?>