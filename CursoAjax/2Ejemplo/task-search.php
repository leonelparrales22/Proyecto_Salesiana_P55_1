<?php
// AQUI HAGO LA CONEXCION CON LA BASE DE DATOS
include('database.php');

//CREAMOS UNA VARIABLE search
//almacenamos lo que nos llegua por post con el 
// valor de la data de search
$search = $_POST['search'];


//si el valor no esta vacio
if(!empty($search)) {
  
  // aqui hago la consulta a la base de datos  
  $query = "SELECT * FROM task WHERE name LIKE '$search%'";
  //aqui realizamos la consulta y guardamos el resultado en result
  $result = mysqli_query($connection, $query);
  

  //SI NO HAY NINGUN RESULTADO EN LA CONSULTA
  // EL DIE ES COMO EL RETURN MUERE ALLI
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }
  
  //DECLARO UNA VARIABLE JSON QUE VA A SER DE TIPO ARRAY
  $json = array();

  //EN $ROW SE ALMACENA EL VALOR ACTUAL DE LA FILA OBTENIDA
  while($row = mysqli_fetch_array($result)) {
      //AQUI VOY LLENANDO EL ARRAY JSON CON LOS VALORES QUE ME VIENE DE LA BDD
    $json[] = array(
        //SE PONE ROW Y EL NOMBRE DE LA COLUMNA DE LA QUE VOY A EXTRAER EL DATO
      'name' => $row['name'],
      'description' => $row['description'],
      'id' => $row['id']
    );
  }
  //CON ESTA FUNCION ME DEVULVE EL JSON EN UN FORMATO DE STRING
  //JSONSTRING TIENE XFIN EL DATO QUE LE QUIERO ENVIAR AL FRONTEND
  $jsonstring = json_encode($json);
  // DEVUELVO EL JSON EN STRING
  echo $jsonstring;
}
?>