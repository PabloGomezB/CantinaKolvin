<?php
    ob_start();
?>
<?php

    // Este script se ejecuta cuando el user hace click en el boton entrar
    // Esta funcion revisa si hay una cookie con el timepo ya creada
    // Si existe redirige a la pagina error.php
    // Si no existe la crea para las proximas 24h y redirige al menu.php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['entrar'])){
        if (!isset($_COOKIE['fecha'])) {

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
        <header id="hindex">
        <!-- <div style="position: fixed; width: 100%"> -->
                <?php include("include/header.php"); ?>
            
                <!-- Div del banner -->
                <!-- <div id="headerDiv">
                    <h1 class="h1Index" style="font-size:60px">Bienvenido</h1>
                    <h1 class="h1Index" style="font-size:40px">Cantina Kolvin</h1>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <input id="inputIndex" type="submit" name="entrar" value="Entrar"/>
                    </form>
                    <a href="./menu.php" id="entrar">Entrar</a>
                </div> -->
            <!-- </div> -->
            
        </header>
        <div id="index">
            <div id="banner"></div>
            <div id="descripcion">
                <h1 style="margin-bottom: 2%; margin-top: 2%;">Cantina Kolvin</h1>
                <h3 style="text-align: justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam illum officiis tempore. Atque, sunt ratione asperiores dignissimos aperiam laborum odio dolor nostrum quis, exercitationem vero ducimus, tenetur nobis nesciunt veniam.
                Aliquam optio voluptate ipsam omnis, ea voluptatem. Magnam reprehenderit sunt nisi aperiam, eius dicta laboriosam iure placeat ipsa. Molestias nostrum incidunt quos ad aut beatae ipsa culpa fugiat iusto quas.
                Reprehenderit libero quidem velit quis dolorem. Quis, odit perferendis. Praesentium voluptates accusantium minima reiciendis? Rerum consectetur, tempora quo inventore reprehenderit, nulla dicta molestiae cupiditate quod autem, aut in maxime quis.
                In nam odio cupiditate incidunt sequi sed aperiam quas praesentium blanditiis tempora voluptatum doloremque error, aliquam quisquam eligendi officia quaerat ea repellat molestias repellendus assumenda reprehenderit odit pariatur deserunt? Quia!
                Nesciunt error dolorum tempora voluptas quidem earum quisquam laborum est alias esse. Corporis, eligendi illo officia labore fugiat quidem qui, suscipit ipsa deleniti officiis cum. Odit exercitationem saepe ratione. Incidunt?</h3>
            </div>
            <div id="eslogan">
                <h1>Almorzar, mi momento favorito del día</h1>
            </div>
            <div id="carta">
                <h1 style="margin-bottom: 5%; margin-top: 2%;">Nuestra Carta</h1>
                <div style="display: flex;">
                    <img class="imagenes" src="img/menu/cafe.jpg" alt="Café" width="150px">
                    <img class="imagenes" src="img/menu/sopa.jpg" alt="Sopa" width="150px">
                    <img class="imagenes" src="img/menu/cruasan.jpg" alt="Cruasan" width="150px">          
                </div>
                <div style="display: flex;">
                    <p id="cafe">Café</p>
                    <p id="sopa">Sopa</p>
                    <p id="cruasan">Cruasan</p>
                </div>
            </div>
        </div>

        <!-- <section class="features-icons text-center" style="margin-top: 60px;">
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
        </section> -->


<!-- FOOTER -->
        <footer id="findex">

            <?php include("include/footer.php"); ?>

        </footer>
        
    </body>
</html>