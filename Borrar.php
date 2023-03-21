<?php 
  
  //Requerir la base de datos
  session_start();
  include("base_datos.php");

  if (isset($_GET['idJuegos'])) {
    $idJuegos = $_GET['idJuegos'];
    $query = "DELETE FROM juegos_lista WHERE idJuegos = $idJuegos";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die("Query Failed");
    }

    $_SESSION['message'] = 'Juego Eliminado';
    $_SESSION['message_type'] = 'primary';
    header("Location: Borrar_Vista.php");
  }

?>