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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <?php
    if (isset($_COOKIE['fecha'])) {
        header("Location: ./error.php");
        die();
    }
    ?>
    <!-- HEADER -->
    <?php include("include/header.php"); ?>

    <div style="background-color: #E8E1D3;">

        <div style="display: flex;">

            <div class="container">
                <h1 style="text-align: center; padding-bottom: 20px;">MENÚ</h1>
                <div class="row">
                    <div id="items" class="col-md-12 row"></div>
                </div>
            </div>

            <aside id="mySidebar" class="sidebar col-md-4">
                <div>
                    <!-- <span style="font-size: 48px;">Carrito</span> -->
                    <button id="botonVaciar" class="btn btn-danger"><i style="background-color:transparent;height:auto;" class="fa fa-trash" aria-hidden="true" style="color: white;"></i></button>
                </div>
                <div>
                    <div id="carrito" style="padding: 25px;"></div>
                </div>
                <div>
                    <button id="comprar" class="fa fa-lock" style="width: 100%;"><span style="margin-left:20px;">Finalizar compra</span></button>
                </div>
            </aside>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include("include/footer.php"); ?>
</body>

</html>

<!-- https://getbootstrap.com/docs/4.0/layout/overview/ -->
<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
<!-- https://programadorwebvalencia.com/javascript-ejemplo-carrito-de-compra/ -->
<!-- https://medium.com/@xadrijo/un-vistazo-a-la-función-reduce-en-javascript-f4459bc4e3aa -->