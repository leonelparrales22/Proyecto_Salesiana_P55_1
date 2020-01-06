<?php
include("Header.php"); 
?>


 <!-- Begin Page Content -->

 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Presión</h1>
<p class="mb-4">En esta tabla se muestran todos los registros de la presión con su fecha correspondiente.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabla Presión</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Presión</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Presión</th>
          </tr>
        </tfoot>
        <tbody>

          <?php
            $conexion = mysqli_connect("localhost", "root", "", "p1") or
            die("Problemas con la conexión");

            $registros = mysqli_query($conexion, "SELECT * FROM `presion`") or
            die("Problemas en el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
            echo "<tr>";
            echo "<td>".$reg['id_presion']."</td>";
            echo "<td>".$reg['fecha']."</td>";
            echo "<td>".$reg['presion']."</td>";  
            echo "</tr>";
            }
            mysqli_close($conexion);
          ?>

          
          

        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->



<?php
include("Footer.php"); 
?>
