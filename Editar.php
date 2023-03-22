<?php 

  session_start();
  include("base_datos.php");

  if (isset($_GET['idJuegos'])) {
    $idJuegos = $_GET['idJuegos'];
    $query = "SELECT * FROM juegos_lista WHERE idJuegos = $idJuegos";
    $result_editar = mysqli_query($conn, $query);
    if (mysqli_num_rows($result_editar) == true) {
      $row = mysqli_fetch_array($result_editar);
      $nombre = $row['nombre'];
      $categoria = $row['categoria'];
      $caracteristicas = $row['caracteristicas'];
      $consola= $row['consola'];
      $añoLanzamiento= $row['añoLanzamiento'];
      $imagen= $row['imagen'];
    }
  }

  if (isset($_POST['actualizar'])) {
    $idJuegos = $_GET['idJuegos'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $caracteristicas = $_POST['caracteristicas'];
    $consola= $_POST['consola'];
    $añoLanzamiento= $_POST['añoLanzamiento'];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

    $query = "UPDATE juegos_lista set nombre = '$nombre', categoria ='$categoria', 
      caracteristicas = '$caracteristicas', consola ='$consola', añoLanzamiento = '$añoLanzamiento',
      imagen = '$imagen' WHERE idJuegos = $idJuegos";
    //$query = "SELECT DATE_FORMAT(añoLanzamiento, '%D-%M-%Y') FROM juegos_lista";
    $result_edita = mysqli_query($conn, $query);

    $_SESSION['message'] = 'Juego actualizado';
    $_SESSION['message_type'] = 'primary';
    header("Location: Editar_Vista.php");
  }

?>

<?php include("Includes/Header.php") ?>


  <div class="container p-4">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card card-body">
          <form action="Editar.php?idJuegos=<?php echo $_GET['idJuegos']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <input type="text" name="nombre" value="<?php echo $nombre; ?>"
                class="form-control" placeholder="Nombre" autofocus>
            </div>
            <div class="form-group mb-3">
                <input type="text" name="categoria" value="<?php echo $categoria; ?>"
                class="form-control" placeholder="Categoria" autofocus>
            </div>
            <div class="form-group mb-3">
                <input type="text" name="caracteristicas" value="<?php echo $caracteristicas; ?>"
                class="form-control" placeholder="Caracteristicas" autofocus>
            </div>
            <div class="form-group mb-3">
                <input type="text" name="consola" value="<?php echo $consola; ?>"
                class="form-control" placeholder="Consola" autofocus>
            </div>
           
            <div class="form-group mb-3">
                <input type='date' name="añoLanzamiento" class="entradaForm" placeholder="añoLanzamiento">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <div class="form-group mb-3">
                <input type="file" name="imagen" required="" value="<?php echo $imagen; ?>">
            </div>
            <button type="submit" class="btn btn-success" 
                name="actualizar"> Actualizar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include("Includes/Footer.php") ?>