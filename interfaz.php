<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de interfaz</title>

    <?php include("include/includes.inc") ?>

</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION["usuario"])) {
        header("Location: administracion.php");
        // exit();
    } else{
    ?>


    <!-- HEADER -->
    <header>
        <?php include("include/header.php"); ?>
    </header>

    <?php
    echo "Estás logueado";
    ?>

    <p>Esta será la interfaz después del login</p>

    <a href="logout.php">Cerrar sesión</a>


    <!-- HEADER -->
    <footer>
        <?php include("include/footer.php"); ?>
    </footer>

    <?php
    }
    ?>

</body>

</html>