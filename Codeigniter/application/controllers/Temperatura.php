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
        //$this->load->view('temperatura/PDF.php');
        //$viewdata["datos"]= $this->TemperaturaModelo->ver_Registros_Temperatura();
        //$html = $this->load->view('temperatura/PDF.php', $viewdata, TRUE);
        // Cargamos la librería
        //$this->load->library('pdfgenerator');
        // definamos un nombre para el archivo. No es necesario agregar la extension .pdf
        //$filename = 'comprobante_pago';
        // generamos el PDF. Pasemos por encima de la configuración general y definamos otro tipo de papel
        //$this->pdfgenerator->generate($html, $filename, true, 'Letter', 'portrait');

        
        $this->load->library('pdfgenerator');
        $data["datos"]= $this->TemperaturaModelo->ver_Registros_Temperatura();
		$html = $this->load->view('temperatura/PDF.php',$data, TRUE);

		$dompdf = new Pdfgenerator();
		$dompdf->load_html($html);
		$dompdf->render();
		//$output = $dompdf->output();
		//file_put_contents('test.pdf', $output);
        $dompdf->stream('ReporteTemperatura.pdf', array("Attachment"=>0));

    }



}
?>