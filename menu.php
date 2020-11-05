<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("include/includes.inc") ?>

    <script type="text/javascript" src="js/menu.js"></script>

</head>

<body style="background-color: #E8E1D3;">

<!-- HEADER -->
    <header id="hindex">
        <!-- <div style="position: fixed; width: 100%"> -->
        <?php include("include/header.php"); ?>

    </header>

    <div style="padding: 2%; background-color: red; width: 100%;">
        <h1 style="text-align: center;">MENÚ</h1>
        <div style="display: flex;">
            <div id="items"></div>
            <aside class="col-md-4">
                <h2>Carrito</h2>
                <ul id="carrito"></ul>
                <hr>
                <p class="text-right">Total: <span id="total"></span></p>
                <button id="botonVaciar" class="btn btn-primary" style="float: left;">Vaciar</button>
                <button id="comprar" class="btn btn-primary" style="float: right;">Comprar</button>
            </aside>
        </div>
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