<?php
include('database.php');
$query = 'UPDATE activadores SET estado=false WHERE nombre="VENTILADOR";';
mysqli_query($conexion, $query);
mysqli_close($conexion);
?>