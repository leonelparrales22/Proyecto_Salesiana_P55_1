<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temperatura extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
        $this->load->model('TemperaturaModelo');
        $this->load->database();

    }

    function index(){
        $data["datos"]= $this->TemperaturaModelo->ultimos_Registros();
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/GraficoTemperatura.php',$data);
        $this->load->view('encabezados/footer.php');
    }

    function GraficoTemperatura(){
        $data["datos"]= $this->TemperaturaModelo->ultimos_Registros();
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/GraficoTemperatura.php',$data);
        
        $this->load->view('encabezados/footer.php');
        
    }

    function TablaTemperatura(){
        $data["datos"]= $this->TemperaturaModelo->ver_Registros_Temperatura();
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/TablaTemperatura.php',$data);
    }

    function llamadaBase(){
        $this->load->view('temperatura/BDDTemperatura.php');
    }

    function Reporte_Temperatura_PDF(){
        $this->load->library('pdfgenerator');
        $data["datos"]= $this->TemperaturaModelo->ver_Registros_Temperatura();
		$html = $this->load->view('temperatura/PDF.php',$data, TRUE);
		$dompdf = new Pdfgenerator();
		$dompdf->load_html($html);
		$dompdf->render();
        $dompdf->stream('Reporte_Temperatura.pdf', array("Attachment"=>0));
    }
}
?>