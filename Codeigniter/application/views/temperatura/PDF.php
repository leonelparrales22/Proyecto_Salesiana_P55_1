<h1>Temperatura</h1>

<table border= "1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Temperatura</th>
                  </tr>
                </thead>
                
                <tbody>

                  <?php
                    foreach ($datos->result_array() as $reg) {
                    echo "<tr>";
                    echo "<td>".$reg['id_temperatura']."</td>";
                    echo "<td>".$reg['fecha']."</td>";
                    echo "<td>".$reg['temperatura']."</td>";  
                    echo "</tr>";
                    }
                  ?>

</tbody>
</table>