<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include("include/includes.inc") ?>

        <script type="text/javascript" src="js/menu_funcions.js"></script>

    </head>

<body>

<!-- HEADER -->
    <header style="margin-bottom: 80px;">
        <!-- <div style="position: fixed; width: 100%"> -->
        <?php include("include/header.php"); ?>

    </header>

    <div class="container">
        <div class="row">
            <main id="items" class="col-md-8 row"></main>
            <aside class="col-md-4">
                <h2>Carrito</h2>
                <ul id="carrito"></ul>
                <hr>
                <p class="text-right">Total: <span id="total"></span></p>
                <button id="botonVaciar" class="btn btn-danger">Vaciar</button>
                <button id="comprar" class="btn btn-danger">Comprar</button>
            </aside>
        </div>
    </div>

<!-- FOOTER -->
    <footer>

        <?php include("include/footer.php"); ?>

    </footer>
</body>

</html>

<!-- https://getbootstrap.com/docs/4.0/layout/overview/ -->
<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
<!-- https://programadorwebvalencia.com/javascript-ejemplo-carrito-de-compra/ -->
<!-- https://medium.com/@xadrijo/un-vistazo-a-la-función-reduce-en-javascript-f4459bc4e3aa -->