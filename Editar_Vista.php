<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VideoJuegos</title>
</head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body background="Img/FondoAdd.jpg" background-size="cover"> 

  <nav class="navbar navbar-dark red bg-danger">
    <div class="container">
        <a href="index.php" class="navbar-brand">ACTUALIZAR JUEGOS</a>
    </div>
  </nav>

  <style> 
    body {background: ("FondoAdd.jpg");
    background-size: cover;
    }
  </style>

  <a href="Admin.php"><img src="Img/Back22.png" width="15%" height="11%"
    style="position: fixed; top: 50%; left: 50%; transform: translate(-250%, 250%)"> 
  </a>

  <?php
    session_start();
    include("base_datos.php");
  ?>

  <div class="container p-4">
    <div class="row">   
      <div class="col-md-8">
        <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
              <?= $_SESSION['message']  ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); }?>
        <table class="table table-bordered border-primary table-hover">
          <thead>
            <tr bgcolor="aqua">
              <th>IdJuego</th>
              <th>Nombre</th>
              <th>Categoria</th>
              <th>Caracteristicas</th>
              <th>Consola</th>
              <th>Lanzamiento</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                $query = "SELECT * FROM juegos_lista";
                $result_juegos = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result_juegos)) { ?>
                      <tr bgcolor="white">
                        <td> <?php echo $row['idJuegos'] ?> </td>
                        <td> <?php echo $row['nombre'] ?> </td>
                        <td> <?php echo $row['categoria'] ?> </td>
                        <td> <?php echo $row['caracteristicas'] ?> </td>
                        <td> <?php echo $row['consola'] ?> </td>
                        <td> <?php echo $row['añoLanzamiento'] ?> </td>
                        <td>
                          <a href="Editar.php?idJuegos=<?php echo $row['idJuegos']?>" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                          </a>
                        </td>
                      </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


</body>

</html>