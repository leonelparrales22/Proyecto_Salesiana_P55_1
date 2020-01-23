<h1>Presión</h1>

<table border= "1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Presión</th>
                  </tr>
                </thead>
                
                <tbody>

                  <?php
                    foreach ($datos->result_array() as $reg) {
                    echo "<tr>";
                    echo "<td>".$reg['id_presion']."</td>";
                    echo "<td>".$reg['fecha']."</td>";
                    echo "<td>".$reg['presion']."</td>";  
                    echo "</tr>";
                    }
                  ?>

</tbody>
</table>