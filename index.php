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
        $fecha = date('d-m-Y');
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

        <?php include("include/includes.inc") ?>

        <title>Bienvenido</title>

    </head>
    <body>
<!-- HEADER -->
        <header>
        <!-- <div style="position: fixed; width: 100%"> -->
                <?php include("include/header.php"); ?>
            
                <!-- Div del banner -->
                <div id="headerDiv">
                    <h1 class="h1Index" style="font-size:60px">Bienvenido</h1>
                    <h1 class="h1Index" style="font-size:40px">Cantina Kolvin</h1>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <input type="submit" name="entrar" value="Entrar"/>
                    </form>
                    <!--<a href="./menu.php" id="entrar">Entrar</a>-->
                </div>
            <!-- </div> -->
        </header>


        <section class="features-icons text-center" style="margin-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="img/index/quality.png" width="150" height="150">
                        <h3>La mejor calidad</h3>
                        <p class="lead mb-0">Materia prima de la buena para nuestros alumnos!</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="img/index/broke.png" width="150" height="150">
                        <h3>Los mejores precios</h3>
                        <p class="lead mb-0">Sabemos que no tenéis ni un duro...<br>Por eso estamos que lo regalamos todo ;)</p>
                    </div>
                        
                    <div class="col-lg-4">
                        <img src="img/index/covid-free.png" width="150" height="150">
                        <h3>Coronavirus free</h3>
                        <p class="lead mb-0">Aquí puedes quitarte la mascarilla.<br>Si no hay mascarilla, es que no hay virus!</p>
                    </div>
                </div>
            </div>
        </section>


<!-- FOOTER -->
        <footer>

            <?php include("include/footer.php"); ?>

        </footer>
        
    </body>
</html>