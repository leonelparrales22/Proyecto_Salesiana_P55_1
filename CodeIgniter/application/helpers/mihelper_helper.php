<?php
    function getTemperaturaGrafico(){
        $conexion = mysqli_connect("localhost", "root", "", "p1") or
            die("Problemas con la conexión");

            $registros = mysqli_query($conexion, "SELECT * FROM `temperatura` ORDER BY `id_temperatura` DESC LIMIT 20") or
            die("Problemas en el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
            echo $reg['temperatura'].",";
            }
            mysqli_close($conexion);
    }
?>