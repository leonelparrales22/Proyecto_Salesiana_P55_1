<?php
include('database.php');
$query = 'UPDATE activadores SET estado=true WHERE nombre="VENTILADOR";';
mysqli_query($conexion, $query);

$query = 'INSERT INTO registro (fecha,descripcion) VALUES(CURRENT_TIMESTAMP(),"VENTILADOR SE ENCENDIO");';
mysqli_query($conexion, $query);

mysqli_close($conexion);
?>
