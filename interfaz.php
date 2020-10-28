<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pantalla de interfaz</title>

    <?php include("includes.inc") ?>

    <link rel="stylesheet" href="css/interfaz.css">
</head>
<body>

<!-- HEADER -->
    <header>
        <?php include("header.php"); ?>
    </header>

    <?php
        session_start();

        if(empty($_SESSION["usuario"])){
            header("Location: administracion.php");
            exit();
        }

        echo "Estás logueado";
    ?>

    <p>Esta será la interfaz después del login</p>

    <a href="logout.php">Cerrar sesión</a>


<!-- HEADER -->
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>