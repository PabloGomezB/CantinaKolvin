<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pantalla de interfaz</title>

    <?php include("include/includes.inc") ?>

</head>
<body>

<!-- HEADER -->
    <header>
        <?php include("include/header.php"); ?>
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
        <?php include("include/footer.php"); ?>
    </footer>
</body>
</html>