<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Botones extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
        $this->load->model('ActuadoresModelo');
        $this->load->database();
    }

    function Foco(){
        $data["datos"]= $this->ActuadoresModelo->estado_Foco();
        $this->load->view('encabezados/header.php');
        $this->load->view('botones/Foco.php',$data);
        $this->load->view('encabezados/footer.php');
    }

    function Ventilador(){
        $this->load->view('encabezados/header.php');
        $this->load->view('botones/Ventilador.php');
        $this->load->view('encabezados/footer.php');
    }

    function VentiladorOn(){
        $this->load->view('botones/VentiladorOn.php');
    }

    function VentiladorOff(){
        $this->load->view('botones/VentiladorOn.php');
    }

    function FocoOn(){
        $this->load->view('botones/FocoOn.php');
    }

    function FocoOff(){
        $this->load->view('botones/FocoOff.php');
    }
}
?>