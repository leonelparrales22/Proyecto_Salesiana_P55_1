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
        $dompdf->stream('Reporte_Temperatura_en_'.date('Ymd').'.pdf', array("Attachment"=>0));
    }

    function Reporte_Temperatura_CSV(){
        $file_name = 'Reporte_Temperatura_en_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$file_name"); 
        header("Content-Type: application/csv;");
   
        // get data 
        $student_data = $this->TemperaturaModelo->ver_Registros_Temperatura();

        // file creation 
        $file = fopen('php://output', 'w');
 
        $header = array("id_temperatura","fecha","temperatura"); 
        fputcsv($file, $header);
        foreach ($student_data->result_array() as $key => $value)
        { 
        fputcsv($file, $value); 
        }
        fclose($file); 
        exit; 
    }

    function TablaTemperaturaDinamica(){
        $data["datos"]= $this->TemperaturaModelo->ver_Registros_Temperatura();
        $this->load->view('temperatura/TablaDinamica.php',$data);
    }

}
?>