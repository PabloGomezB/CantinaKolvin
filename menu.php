<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Menu</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='menuPrueba.css'> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src='js/menu_funcions.js'></script>
</head>

<body>
    <header style="margin-bottom: 100px;">
        <!-- <div style="position: fixed; width: 100%"> -->
        <?php include("header.php"); ?>

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
                <form method="post" action="finalizacion.php">
                    <input type="hidden" name="arrayComanda" id="arrayComanda" value="">
                    <input type="submit" id="comprar" class="btn btn-danger" value="Comprar">
                </form>
            </aside>
        </div>
    </div>
</body>

</html>

<!-- https://getbootstrap.com/docs/4.0/layout/overview/ -->
<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
<!-- https://programadorwebvalencia.com/javascript-ejemplo-carrito-de-compra/ -->
<!-- https://medium.com/@xadrijo/un-vistazo-a-la-función-reduce-en-javascript-f4459bc4e3aa -->