<?php
$conexion = mysqli_connect("localhost", "root", "", "p1") or
die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select * from presion ORDER BY fecha DESC LIMIT 1") or
die("Problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
    echo $reg['presion'];
}
mysqli_close($conexion);
