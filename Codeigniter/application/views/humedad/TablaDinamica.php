<?php
echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
  <tr>
    <th>ID</th>
    <th>Fecha</th>
    <th>Humedad</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>ID</th>
    <th>Fecha</th>
    <th>Humedad</th>
  </tr>
</tfoot>
<tbody>';

    foreach ($datos->result_array() as $reg) {
    echo "<tr>";
    echo "<td>".$reg['id_humedad']."</td>";
    echo "<td>".$reg['fecha']."</td>";
    echo "<td>".$reg['humedad']."</td>";  
    echo "</tr>";
    }
    
echo '   
</tbody>
</table>'
?>