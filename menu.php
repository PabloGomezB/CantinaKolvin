<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include("includes.inc") ?>

        <link rel="stylesheet" href="css/menu.css">
        <script type="text/javascript" src="js/menu_funcions.js"></script>

    </head>

<body>

<!-- HEADER -->
    <header style="margin-bottom: 80px;">
        <!-- <div style="position: fixed; width: 100%"> -->
        <?php include("header.php"); ?>

    </header>

    <div id="mySidebar" class="sidebar">
        <form method="post" action="finalizacion.php">
            <input type="hidden" name="arrayComanda" id="arrayComanda" value="">
            <input type="submit" id="comprar" value="Comprar">
        </form>
    </div>

    <div id="no_bar">
        <h1>MENU</h1>
        <div id="items"></div>
    </div>

<!-- FOOTER -->
    <footer>

            <?php include("footer.php"); ?>

        </footer>
</body>

</html>