<?php
include('database.php');
$query = 'UPDATE activadores SET estado=false WHERE nombre="VENTILADOR";';
mysqli_query($conexion, $query);
console.log("leonel parrales");
mysqli_close($conexion);
?>