<?php include("base_datos.php");



$buscardor=mysqli_query($conn,"SELECT * FROM juegos_lista WHERE nombre LIKE LOWER('%".$_POST["buscar"]."%') OR categoria LIKE LOWER ('%".$_POST["buscar"]."%') "); 

if (!$buscardor) {
    // Si la consulta falla, imprimir un mensaje de error o tomar alguna otra acción
    echo "Error al ejecutar la consulta: " . mysqli_error($conn);
  } else {
    // Si la consulta se realiza correctamente, obtener el número de filas
    $numero = mysqli_num_rows($buscardor);
  } ?>




<h5 class="card-tittle">Resultados encontrados (<?php echo $numero; ?>):</h5>

<?php while($resultado = mysqli_fetch_assoc($buscardor)){ ?>


<p class="card-text"><?php echo $resultado["nombre"]; ?> - <?php echo $resultado["categoria"] ?> <br><b> <?php echo "¿Buscabas este juego?" ?> </b> </br> </p>

<?php } ?>