<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Botones extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
    }

    function Foco(){
        $this->load->view('encabezados/header.php');
        $this->load->view('botones/Foco.php');
        $this->load->view('encabezados/footer.php');
    }

    function Ventilador(){
        $this->load->view('encabezados/header.php');
        $this->load->view('botones/Ventilador.php');
        $this->load->view('encabezados/footer.php');
    }
}
?>