<?php
include('database.php');
$query = 'UPDATE activadores SET estado=true WHERE nombre="VENTILADOR";';
mysqli_query($conexion, $query);
mysqli_close($conexion);
?>
