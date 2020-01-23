<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Humedad extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
        $this->load->model('HumedadModelo');
        $this->load->database();
    }

    function GraficoHumedad(){
        $data["datos"]= $this->HumedadModelo->ultimos_Registros();
        $this->load->view('encabezados/header.php');
        $this->load->view('humedad/GraficoHumedad.php',$data);
        $this->load->view('encabezados/footer.php');
    }

    function TablaHumedad(){
        $data["datos"]= $this->HumedadModelo->ver_Registros_Humedad();
        $this->load->view('encabezados/header.php',$data);
        $this->load->view('humedad/TablaHumedad.php');
    }

    function llamadaBase(){
        $this->load->view('humedad/BDDHumedad.php');
    }

    function Reporte_Humedad_PDF(){
        $this->load->library('pdfgenerator');
        $data["datos"]= $this->HumedadModelo->ver_Registros_Humedad();
		$html = $this->load->view('humedad/PDF.php',$data, TRUE);
		$dompdf = new Pdfgenerator();
		$dompdf->load_html($html);
		$dompdf->render();
        $dompdf->stream('Reporte_Humedad.pdf', array("Attachment"=>0));
    }
}
?>