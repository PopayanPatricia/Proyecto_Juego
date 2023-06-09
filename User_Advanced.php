<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beginner</title>
</head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body background="Img/User1.gif" background-size="cover"> 

  <nav class="navbar navbar-dark bg-secondary" style="width: 100%;">
    <div class="container" >
        <a href="index.php" class="navbar-brand mx-auto">LIST GAME FOR ADVANCED</a>
    </div>
  </nav>

  <style> 
    body {background: ("User1.gif" );
    background-size: cover;
    }
  </style>

  <a href="Profile_User.php"><img src="Img/Back24.png" width="10%" height="8%"
    style="position: fixed; top: 50%; left: 50%; transform: translate(350%, 150%)"> 
  </a>
  
  <?php //Llamada a la base de datos
  include("base_datos.php") ?>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
<div class="container p-4">
  <div class="row">
    <div class="col-md-2">
      <h6 style="color: white">Buscador por ID de Juego</h6>
      <form action="Buscador.php" method="POST">
          <div class="form-group">
              <label for="idJuego" style="color: white">ID de Juego:</label>
              <input type="number" class="form-control" id="idJuego" name="idJuego" required>
          </div>
          <button type="submit" class="btn btn-primary mt-2 mb-2">Buscar</button>
      </form>
      <div id="resultado" style="background-color: #f2f2f2; border-radius: 10px; padding: 10px;">
          <?php
          if (isset($_GET['idJuego']) && isset($_GET['nombre'])) {
              echo "<p>ID de Juego: {$_GET['idJuego']}</p>";
              echo "<p>Nombre: {$_GET['nombre']}</p>";
          }
          ?>
      </div> 
    </div>     
      <div class="col-md-8">
        <style>
            table {
              margin: auto;
            }
          </style>
        <table class="table table-bordered border-primary table-hover">
          <thead>
            <tr bgcolor="aqua">
              <th>IdJuego</th>
              <th>Nombre</th>
              <th>Categoria</th>
              <th>Caracteristicas</th>
              <th>Consola</th>
              <th>Lanzamiento</th>
              <th>Imagen</th>
            </tr>
          </thead>
          <tbody>
            <?php //Consulta a la BD tabla juegos_lista para listar los datos de la interfaz de user_beginner
                $query = "SELECT * FROM juegos_lista";
                $result_juegos = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result_juegos)){ ?>
                      <tr bgcolor="white">
                        <td> <?php echo $row['idJuegos'] ?> </td>
                        <td> <?php echo $row['nombre'] ?> </td>
                        <td> <?php echo $row['categoria'] ?> </td>
                        <td> <?php echo $row['caracteristicas'] ?> </td>
                        <td> <?php echo $row['consola'] ?> </td>
                        <td> <?php echo $row['añoLanzamiento'] ?> </td>
                        <td><img height="30px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']) ?>"></td>
                      </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>