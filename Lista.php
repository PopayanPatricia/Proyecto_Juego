<!DOCTYPE html>
<html lang="en">
<head>
<style>
    table {font-family: Roboto, sans-serif;
      font-size: 14px;
      color: while;
      }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Games</title>
</head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body background="Img/FondoRead.jpg" background-size="cover"> 

  <nav class="navbar navbar-dark bg-info" style="width: 100%;">
    <div class="container">
        <a href="index.php" class="navbar-brand mx-auto">LIST OF GAMES</a>
    </div>
  </nav>

  
  <style> 
    body {background: ("FondoRead.jpg" );
    background-size: cover;
    }
  </style>

  <a href="Admin.php"><img src="Img/Back22.png" width="15%" height="11%"
    style="position: fixed; top: 50%; left: 50%; transform: translate(220%, 200%)"> 
  </a>
  
  <?php //Llamada a la base de datos
  include("base_datos.php") ?>

  <div class="container p-4">
   <div class="row">   
      <div class="col-md-8">
        <table class="table table-bordered  border-primary table-hover position: fixed; top: 200px; left: 200px;">
        
          <style>
              th{text-align: center;
              color: blue;
            }
          </style>
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
            <?php //Consulta a la BD tabla juegos_lista para listar los datos en la tabla de la interfaz de usuario admin
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>