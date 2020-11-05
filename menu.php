<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php include("include/includes.inc") ?>

    <script type="text/javascript" src="js/menu.js"></script>

</head>

<body>

<!-- HEADER -->
    <header id="hindex">
        <!-- <div style="position: fixed; width: 100%"> -->
        <?php include("include/header.php"); ?>

    </header>
    
    
    <div style="display: flex;">
        <div class="container-fluid">
            <h1 style="margin-top: 1%; margin-left: 16%;">MENÚ</h1>
            <div class="row">
                <main id="items" class="col-md-8 row"></main>         
            </div>
        </div>
        <aside class="col-md-4" style="display: block; background-color: white;" id="sidebar">
            <i class="material-icons" style="font-size:48px;" id="cerrar">&#xe5cd;</i>
            <h2>Mi carrito</h2>
            <ul id="carrito"></ul>
            <hr>
            <p class="text-right">Total: <span id="total"></span></p>
            <button id="botonVaciar" class="btn btn-primary" style="float: left;">Vaciar <i class="fa fa-shopping-cart"></i></button>
            <button id="comprar" style="float: right; background-color: #9C917E;">Comprar</button>
        </aside>
    </div>
    

<!-- FOOTER -->
    <footer id="findex">

        <?php include("include/footer.php"); ?>

    </footer>
</body>

</html>

<!-- https://getbootstrap.com/docs/4.0/layout/overview/ -->
<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
<!-- https://programadorwebvalencia.com/javascript-ejemplo-carrito-de-compra/ -->
<!-- https://medium.com/@xadrijo/un-vistazo-a-la-función-reduce-en-javascript-f4459bc4e3aa -->