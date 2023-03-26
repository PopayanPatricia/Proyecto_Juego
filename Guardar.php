<?php

//Llamada a la base de datos
  session_start();
  include("base_datos.php");

//Validar datos del archivo Gardar_Vista
if (isset($_POST['Guardar'])){

  $nombre = $_POST['nombre'];
  $categoria = $_POST['categoria'];
  $caracteristicas = $_POST['caracteristicas'];
  $consola = $_POST['consola'];
  $añoLanzamiento = $_POST['añoLanzamiento'];
  $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

//Consulta a la BD tabla juegos
  $query = "INSERT INTO juegos_lista(nombre, categoria, caracteristicas, consola, añolanzamiento, imagen) 
    VALUES ('$nombre', '$categoria', '$caracteristicas', '$consola', '$añoLanzamiento', '$imagen')";
  $resultado = mysqli_query($conn, $query);

  //comprobar el resultado
  if(!$resultado){
    die("Ha fallado");
  }
//almacenar mensaje
  $_SESSION['message'] = 'Juego guardado';
  $_SESSION['message_type'] = 'primary';
  header("Location: Guardar_Vista.php");
}
?>