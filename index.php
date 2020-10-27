<?php
    ob_start();
?>
<?php
    //foreach ($_COOKIE['fecha'] as $key => $value) {
    //    echo $key .' - ' . $value;
    //}

    // Este script se ejecuta cuando el user hace click en el boton entrar
    // Si el usuario ha clickado en el boton "entrar" se ejecuta la funcion check()
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['entrar'])){
        check();
    }

    // Esta funcion revisa si hay una cookie con el timepo ya creada
    // Si existe redirige a la pagina error.php
    // Si no existe la crea para las proximas 24h y redirige al menu.php
    function check(){
        $fecha = date('d/m/Y');
        $hora = date (' H:i');
        if (!isset($_COOKIE['fecha'])) {
            // setcookie("fecha[dia]", $fecha, time() + 24 * 3600);
            // setcookie('fecha[hora]', $hora, time() + 24 * 3600);
            // setcookie("fecha[dia]", $fecha, time() + 3);
            // setcookie('fecha[hora]', $hora, time() + 3);
            header("Location: ./menu.php");
            die();
        }else{
            header("Location: ./error.php");
            die();
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="./css/index.css">

        <title>Bienvenido</title>

    </head>
    <body>
        <header>
        <!-- <div style="position: fixed; width: 100%"> -->
                <?php include("header.php"); ?>
            
                <!-- Div del banner -->
                <div id="headerDiv">
                    <h1 style="font-size:60px">Bienvenido</h1>
                    <h1 style="font-size:40px">Cantina Kolvin</h1>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <input type="submit" name="entrar" value="Entrar"/>
                    </form>
                    <!--<a href="./menu.php" id="entrar">Entrar</a>-->
                </div>
            <!-- </div> -->
        </header>

        <?php include("footer.php"); ?>
    </body>
</html>