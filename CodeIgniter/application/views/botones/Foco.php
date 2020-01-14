<style type="text/css">
.switch {
  position: relative;
  display: inline-block;
  /*60*/ 
  width: 300px;
  /*34*/
  height: 100px;
}
 
/* Ocultamos el checkbox html */
.switch input {
  display:none;
}
 
/* Formateamos la caja del interruptor sobre la cual se deslizará la perilla de control o slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
 
/* Pintamos la perilla de control o slider usando el selector before */
.slider:before {
  position: absolute;
  content: "";
  /*26*/
  height: 95px;
  /*26*/
  width: 100px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
 
/* Cambiamos el color de fondo cuando el checkbox esta activado */
input:checked + .slider {
  background-color: #E27AD8;
}
 
/* Deslizamos el slider a la derecha cuando el checkbox esta activado */ 
input:checked + .slider:before {
  -webkit-transform: translateX(193px);
  -ms-transform: translateX(193px);
  transform: translateX(193px);
}
 
/* Aplicamos efecto de bordes redondeados en slider y en el fondo del slider */
.slider.round {
  border-radius: 34px;
}
 
.slider.round:before {
  border-radius: 50%;
}
</style>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
Encender/Apagar Foco:
<br>
<br>
<center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<img src="<?php echo base_url();?>img/Foco.jpg" alt="Smiley face" height="300" width="300">
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<label class="switch">
          <input class="active" type="checkbox" 
          
          <?php
          //include(echo base_url();'database.php');
          $conexion = mysqli_connect("localhost", "root", "", "p1") or
          die("Problemas con la conexion");
          $registros = mysqli_query($conexion, 'SELECT * FROM `activadores` WHERE nombre="FOCO"') or
          die("Problemas en el select:" . mysqli_error($conexion));

          while ($reg = mysqli_fetch_array($registros)) {
           $reg['estado'];

           if ($reg['estado']==1) {
              echo ' checked="checked"';
            }
          }
          mysqli_close($conexion);
          ?>
          
          >

          <div class="slider round"></div>
        </label>
</center>

<br>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Frontend Logic -->
<script src="<?php echo base_url();?>app2.js"></script>