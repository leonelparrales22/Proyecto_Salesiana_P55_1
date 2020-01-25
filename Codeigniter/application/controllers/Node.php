<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Node extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('NodeModelo');
        $this->load->database();
    }

    function EnviarDatos(){
        $this->load->view('node/enviar.php');
    }

    function index(){
        $this->load->view('node/enviar.php');
    }
}
?>