<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Node extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('nodeModelo');
        $this->load->database();
    }

    function enviarDatos(){
        $this->load->view('node/enviar.php');
    }

    function index(){
        $this->load->view('node/enviar.php');
    }
}
?>