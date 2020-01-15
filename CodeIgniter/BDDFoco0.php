<?php
include('database.php');
$query = 'UPDATE activadores SET estado=false WHERE nombre="FOCO";';
mysqli_query($conexion, $query);

$query = 'INSERT INTO registro (fecha,descripcion) VALUES(CURRENT_TIMESTAMP(),"FOCO SE APAGO");';
mysqli_query($conexion, $query);

mysqli_close($conexion);
?>
