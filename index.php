<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/index.css">

    <title>Bienvenido</title>

</head>
<body>

    <!-- Este script se ejecuta cuando el user hace click en el boton entrar -->
    <?php

        // Si el usuario ha clickado en el boton "entrar" se ejecuta la funcion check()
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['entrar'])){
            check();
        }

        // Esta funcion revisa si hay una cookie con el timepo ya creada
        // Si existe redirige a la pagina error.php
        // Si no existe la crea para las proximas 24h y redirige al menu.php
        function check(){
            $tiempo = date('d/m/Y');

            if (!isset($_COOKIE['fecha'])) {
                setcookie("fecha", $tiempo, time() + 24 * 3600);
                header("Location: ./menu.php");
                die();
            }else{
                header("Location: ./error.php");
                die();
            }
        }
        
        
    ?>

    <!-- Div del banner -->
    <div id="header">
        <h1 style="font-size:80px">Bienvenido</h1>
        <h1>Cantina Kolvin</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="submit" name="entrar" value="Entrar"/>
        </form>
        <!--<a href="./menu.php" id="entrar">Entrar</a>-->
    </div>

</body>
</html>