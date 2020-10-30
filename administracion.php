<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pantalla de administracion</title>

    <?php include("include/includes.inc") ?>

</head>
<body>

    <?php
        session_start();
        if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
            header("Location: interfaz.php");
        }
    ?>


<!-- HEADER -->
    <header>
        <?php include("include/header.php"); ?>
    </header>

    <form action="login.php" method="POST" style="height: 500px;">
        <h1>Cantina Kolvin</h1>
        <div id="usuario">
            <input type="text" name="usuario" placeholder="Usuario" class="usuPass">
        </div>
        <div id="contra">
            <input type="password" name="contra" placeholder="Contraseña" class="usuPass">
        </div>
        <!-- <div id="recordar">
            <label for=""><input type="checkbox" name="recordar">Recordar</label>
        </div> -->
        <div id="enviar">
            <input type="submit" value="Iniciar sesión" id="login">
        </div>
    </form>


<!-- HEADER -->
    <footer>
        <?php include("include/footer.php"); ?>
    </footer>
</body>
</html>