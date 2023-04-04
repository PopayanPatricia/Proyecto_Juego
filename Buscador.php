<?php
include("base_datos.php");

if (isset($_POST['idJuego'])) {
    $idJuego = $_POST['idJuego'];

    $buscador = mysqli_query($conn, "SELECT * FROM juegos_lista WHERE idJuegos = $idJuego");

    if (!$buscador) {
        // Si la consulta falla, imprimir un mensaje de error o tomar alguna otra acción
        echo "Error al ejecutar la consulta: " . mysqli_error($conn);
    } else {
        // Si la consulta se realiza correctamente, obtener el número de filas
        $numero = mysqli_num_rows($buscador);

        if ($numero == 1) {
            $resultado = mysqli_fetch_assoc($buscador);
            $idJuego = $resultado['idJuegos'];
            $nombre = $resultado['nombre'];

            header("Location: User_Beginner.php?idJuego=$idJuego&nombre=$nombre");
            exit();
        } else {
            echo "<p>No se encontró ningún juego con el ID ingresado.</p>";
        }
    }
} ?>

<?php
include("base_datos.php");

if (isset($_POST['idJuego'])) {
    $idJuego = $_POST['idJuego'];

    $buscador = mysqli_query($conn, "SELECT * FROM juegos_lista WHERE idJuegos = $idJuego");

    if (!$buscador) {
        // Si la consulta falla, imprimir un mensaje de error o tomar alguna otra acción
        echo "Error al ejecutar la consulta: " . mysqli_error($conn);
    } else {
        // Si la consulta se realiza correctamente, obtener el número de filas
        $numero = mysqli_num_rows($buscador);

        if ($numero == 1) {
            $resultado = mysqli_fetch_assoc($buscador);
            $idJuego = $resultado['idJuegos'];
            $nombre = $resultado['nombre'];

            header("Location: User_Beginner.php?idJuego=$idJuego&nombre=$nombre");
            exit();
        } else {
            echo "<p>No se encontró ningún juego con el ID ingresado.</p>";
        }
    }
} ?>

<?php
include("base_datos.php");

if (isset($_POST['idJuego'])) {
    $idJuego = $_POST['idJuego'];

    $buscador = mysqli_query($conn, "SELECT * FROM juegos_lista WHERE idJuegos = $idJuego");

    if (!$buscador) {
        // Si la consulta falla, imprimir un mensaje de error o tomar alguna otra acción
        echo "Error al ejecutar la consulta: " . mysqli_error($conn);
    } else {
        // Si la consulta se realiza correctamente, obtener el número de filas
        $numero = mysqli_num_rows($buscador);

        if ($numero == 1) {
            $resultado = mysqli_fetch_assoc($buscador);
            $idJuego = $resultado['idJuegos'];
            $nombre = $resultado['nombre'];

            header("Location: User_Advanced.php?idJuego=$idJuego&nombre=$nombre");
            exit();
        } else {
            echo "<p>No se encontró ningún juego con el ID ingresado.</p>";
        }
    }
} ?>


<?php
include("base_datos.php");

if (isset($_POST['idJuego'])) {
    $idJuego = $_POST['idJuego'];

    $buscador = mysqli_query($conn, "SELECT * FROM juegos_lista WHERE idJuegos = $idJuego");

    if (!$buscador) {
        // Si la consulta falla, imprimir un mensaje de error o tomar alguna otra acción
        echo "Error al ejecutar la consulta: " . mysqli_error($conn);
    } else {
        // Si la consulta se realiza correctamente, obtener el número de filas
        $numero = mysqli_num_rows($buscador);

        if ($numero == 1) {
            $resultado = mysqli_fetch_assoc($buscador);
            $idJuego = $resultado['idJuegos'];
            $nombre = $resultado['nombre'];

            header("Location: User_Expert.php?idJuego=$idJuego&nombre=$nombre");
            exit();
        } else {
            echo "<p>No se encontró ningún juego con el ID ingresado.</p>";
        }
    }
} ?>