<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pantalla de administracion</title>

    <?php include("includes.inc") ?>

    <link rel="stylesheet" href="css/administracion.css">
</head>
<body>

<!-- HEADER -->
    <header>
        <?php include("header.php"); ?>
    </header>

    <form action="login.php" method="POST">
        <h1>Cantina Kolvin</h1>
        <div id="usuario">
            <input type="text" name="usuario" placeholder="Usuario" class="usuPass">
        </div>
        <div id="contra">
            <input type="password" name="contra" placeholder="Contraseña" class="usuPass">
        </div>
        <div id="recordar">
            <label for=""><input type="checkbox" name="recordar">Recordar</label>
        </div>
        <div id="enviar">
            <input type="submit" value="Iniciar sesión" id="login">
        </div>
    </form>


<!-- HEADER -->
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>