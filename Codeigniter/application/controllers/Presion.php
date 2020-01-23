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

    function Reporte_Presion_PDF(){
        $this->load->library('pdfgenerator');
        $data["datos"]= $this->PresionModelo->ver_Registros_Presion();
		$html = $this->load->view('presion/PDF.php',$data, TRUE);
		$dompdf = new Pdfgenerator();
		$dompdf->load_html($html);
		$dompdf->render();
        $dompdf->stream('Reporte_Presion_en'.date('Ymd').'.pdf', array("Attachment"=>0));
    }

    function Reporte_Presion_CSV(){
        $file_name = 'Reporte_Presion_en_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$file_name"); 
        header("Content-Type: application/csv;");
   
        // get data 
        $student_data = $this->PresionModelo->ver_Registros_Presion();

        // file creation 
        $file = fopen('php://output', 'w');
 
        $header = array("id_presion","fecha","presion"); 
        fputcsv($file, $header);
        foreach ($student_data->result_array() as $key => $value)
        { 
        fputcsv($file, $value); 
        }
        fclose($file); 
        exit; 
    }
}
?>