<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pantalla de login</title>

    <?php include("includes.inc") ?>

    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<!-- HEADER -->
    <header>
        <?php include("header.php"); ?>
    </header>

    <?php
        $usuario_ok = "ausias";
        $password_ok = "ausias";

        $usuario = $_POST["usuario"];
        $password = $_POST["contra"];

        if($usuario === $usuario_ok && $password === $password_ok){
            session_start();

            $_SESSION["usuario"] = $usuario;

            header("Location: interfaz.php");
        }else{
            echo "El usuario o la contraseña son incorrectos";
        }
    ?>


<!-- HEADER -->
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>