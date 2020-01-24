<h1>Humedad</h1>
<?php
echo date('Y-m-d');
?>

<table border= "1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Humedad</th>
                  </tr>
                </thead>
                
                <tbody>

                  <?php
                    foreach ($datos->result_array() as $reg) {
                    echo "<tr>";
                    echo "<td>".$reg['id_humedad']."</td>";
                    echo "<td>".$reg['fecha']."</td>";
                    echo "<td>".$reg['humedad']."</td>";  
                    echo "</tr>";
                    }
                  ?>

</tbody>
</table>