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

        // 
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['entrar'])){
            check();
        }

        function check(){
            $tiempo = date('d/m/Y');

            if (!isset($_COOKIE['fecha'])) {
                setcookie("fecha", $tiempo, time() + 60*60*24);
                header("Location: ./menu.php");
                die();
            }else{
                header("Location: ./error.php");
                die();
            }
        }
        
        
    ?>

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