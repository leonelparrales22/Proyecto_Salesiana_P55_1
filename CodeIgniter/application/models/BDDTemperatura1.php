<?php
$conexion = mysqli_connect("localhost", "root", "", "p1") or
die("Problemas con la conexión");

$conexion = mysqli_connect("192.168.0.105", "root", "Chocolate7", "BDD") or
die("Problemas con la conexion");


$registros = mysqli_query($conexion, "select * from temperatura ORDER BY fecha DESC LIMIT 1") or
die("Problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
   echo $reg['temperatura'];
}
mysqli_close($conexion);



// defined('BASEPATH') OR exit('No direct script access allowed');

// class BDDTemperatura1 extends CI_Model {

//     function __construct(){
//         parent::__construct();
//         $this->load->database();
//         $query = $this->db->query('select * from temperatura ORDER BY fecha DESC LIMIT 1');
//         foreach ($query->result_array() as $reg) {
//             echo $reg['temperatura'];
//         }
//     }
    
//     }
    
?>
