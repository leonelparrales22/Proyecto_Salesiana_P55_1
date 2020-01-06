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













<!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>