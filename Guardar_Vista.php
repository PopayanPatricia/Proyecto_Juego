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
 
  <nav class="navbar navbar-dark bg-danger">
        <div class="container">
            <a href="index.php" class="navbar-brand">REGISTRAR NUEVOS JUEGOS</a>
        </div>
    </nav>

  <style> 
    body {background: ("FondoAdd.jpg" );
      background-size: cover;
    }  
  </style>

  <a href="Admin.php"><img src="Img/Back22.png" width="15%" height="11%"
    style="position: fixed; top: 50%; left: 50%; transform: translate(-250%, 250%)"> 
  </a>

  <?php 
    session_start();
    include("base_datos.php")
  ?>

  <div class="container p-4">
    
   <div class="row">
        <div class="col-md-4">
          <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
              <?= $_SESSION['message'] ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="Guardar.php" method="POST">
                    <div class="form-group mb-3">
                        <input type="text" name="nombre" class="form-control"
                        placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="categoria" class="form-control"
                        placeholder="Categoria" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="caracteristicas" class="form-control"
                        placeholder="Caracteristicas" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="consola" class="form-control"
                        placeholder="Consola" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="añoLanzamiento" class="form-control"
                        placeholder="Lanzamiento" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                        name="Guardar" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
          <table class="table table-bordered border-primary table-hover">
            <thead>
              <tr bgcolor="aqua">
                <th>IdJuego</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Caracteristicas</th>
                <th>Consola</th>
                <th>Lanzamiento</th>
              </tr>
            </thead>
            <tbody>
              <?php 
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

