<?php

//Requerir la base de datos
  session_start();
  include("base_datos.php");


if (isset($_POST['Guardar'])){

  $nombre = $_POST['nombre'];
  $categoria = $_POST['categoria'];
  $caracteristicas = $_POST['caracteristicas'];
  $consola = $_POST['consola'];
  $añoLanzamiento = $_POST['consola'];

  $query = "INSERT INTO juegos_lista(nombre, categoria, caracteristicas, consola, lanzamiento) VALUES ('$nombre', '$categoria',
    '$caracteristicas', '$consola', '$añoLanzamiento')";
  $resultado = mysqli_query($conn, $query);

  if(!$resultado){
    die("Ha fallado");
  }

  $_SESSION['message'] = 'Juego guardado';
  $_SESSION['message_type'] = 'primary';
  header("Location: Guardar_Vista.php");
}
?>