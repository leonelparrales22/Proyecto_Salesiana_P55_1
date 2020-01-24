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
        $data["datos"]= $this->HumedadModelo->ver_Registros_Humedad20();
        $this->load->view('encabezados/header.php',$data);
        $this->load->view('humedad/TablaHumedad.php');
        $this->load->view('encabezados/footer.php');
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
        $dompdf->stream('Reporte_Humedad_en_'.date('Ymd').'.pdf', array("Attachment"=>0));
    }

    function Reporte_Humedad_CSV(){
        $file_name = 'Reporte_Humedad_en_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$file_name"); 
        header("Content-Type: application/csv;");
   
        // get data 
        $student_data = $this->HumedadModelo->ver_Registros_Humedad();

        // file creation 
        $file = fopen('php://output', 'w');
 
        $header = array("id_humedad","fecha","humedad"); 
        fputcsv($file, $header);
        foreach ($student_data->result_array() as $key => $value)
        { 
        fputcsv($file, $value); 
        }
        fclose($file); 
        exit; 
    }

    function TablaHumedadDinamica(){
        $data["datos"]= $this->HumedadModelo->ver_Registros_Humedad20();
        $this->load->view('humedad/TablaDinamica.php',$data);
    }


    
}
?>