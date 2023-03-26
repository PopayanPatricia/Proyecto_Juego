<?php 
  
  //Llamada a la base de datos
  session_start();
  include("base_datos.php");

  //Validar si existe el idJuegos para ejecutar la consulta
  if (isset($_GET['idJuegos'])) {
    $idJuegos = $_GET['idJuegos'];
    $query = "DELETE FROM juegos_lista WHERE idJuegos = $idJuegos";//Consulta a la BD tabla juegos
    $result = mysqli_query($conn, $query);
    //comprobar el resultado
    if (!$result) {
      die("Query Failed");
    }

    //almacenar mensaje 
    $_SESSION['message'] = 'Juego Eliminado';
    $_SESSION['message_type'] = 'primary';
    header("Location: Borrar_Vista.php");
  }

?>