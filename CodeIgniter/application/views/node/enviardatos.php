<?php
$conexion = mysqli_connect("localhost","phpmyadmin","wq","phpmyadmin") or
die("Problemas con la conexion");
$chipid = $_POST ['chipid'];
$temperatura = $_POST ['temperatura'];
$humedad = $_POST ['humedad'];





mysqli_query($conexion, "INSERT INTO TEMPERATURA(`id_temperatura`, `chipid`, `fecha`, `temperatura`) VALUES (null,'$chipid',CURRENT_TIMESTAMP,'$temperatura')")
or die(mysqli_error($conexion));
echo "se inserto tem.";

mysqli_query($conexion, "INSERT INTO HUMEDAD(`id_humedad`, `chipid`, `fecha`, `humedad`) VALUES (null,'$chipid',CURRENT_TIMESTAMP,'$humedad')")
or die(mysqli_error($conexion));
echo "se inserto hume.";

?>

