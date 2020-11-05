<?php
ob_start();
?>
<?php

// Este script se ejecuta cuando el user hace click en el boton entrar
// Esta funcion revisa si hay una cookie con el timepo ya creada
// Si existe redirige a la pagina error.php
// Si no existe la crea para las proximas 24h y redirige al menu.php
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['entrar'])) {
    if (!isset($_COOKIE['fecha'])) {

        header("Location: ./menu.php");
        die();
    } else {
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
    <?php include("include/header.php"); ?>

    <div class="index">

        <!-- SLIDER BOOTSTRAP-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height: 500px;">
                <div class="item active">
                    <img src="img/index/entradaCantina.jpg" alt="Entrada">
                </div>

                <div class="item">
                    <img src="img/index/recepcionCantina.jpg" alt="Recepcion">
                </div>

                <div class="item">
                    <img src="img/index/comedorCantina.jpg" alt="Comedor">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- DESCRIPCION -->

        <div class="descripcion">
            <h1 >Cantina Kolvin</h1>
            <p class="descripcionContenido margenes">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam illum officiis tempore. Atque, sunt ratione asperiores dignissimos aperiam laborum odio dolor nostrum quis, exercitationem vero ducimus, tenetur nobis nesciunt veniam.
                Aliquam optio voluptate ipsam omnis, ea voluptatem. Magnam reprehenderit sunt nisi aperiam, eius dicta laboriosam iure placeat ipsa. Molestias nostrum incidunt quos ad aut beatae ipsa culpa fugiat iusto quas.
                Reprehenderit libero quidem velit quis dolorem. Quis, odit perferendis. Praesentium voluptates accusantium minima reiciendis? Rerum consectetur, tempora quo inventore reprehenderit, nulla dicta molestiae cupiditate quod autem, aut in maxime quis.
                </p>
        </div>

        <!-- SLOGAN -->

        <div class="eslogan">
            <h1>Almorzar, mi momento favorito del día</h1>
        </div>

        <!-- CARTA -->

        <div class="cartaIndex">
            <h1 style="margin-bottom: 5%;">Nuestra Carta</h1>
            <div class="d-flex justify-content-around">
                <div class="p-2">
                    <img class="imagenesCarta" src="img/menu/cafe.jpg" alt="Café" width="150px" height="150px">
                    <div class="cafe">Café</div>
                </div>
                <div class="p-2">
                    <img class="imagenesCarta" src="img/menu/sopa.jpg" alt="Sopa" width="150px" height="150px">
                    <div class="sopa">Sopa</div>
                </div>
                <div class="p-2">
                    <img class="imagenesCarta" src="img/menu/cruasan.jpg" alt="Cruasan" width="150px" height="150px">
                    <div class="cruasan">Cruasan</div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include("include/footer.php"); ?>
    
</body>