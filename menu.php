<html>

<head>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script type="text/javascript" src="js/menu_funcions.js"></script>

</head>

<body>

    <header>
        <!-- <div style="position: fixed; width: 100%"> -->
        <?php include("header.php"); ?>

    </header>

    <div id="mySidebar" class="sidebar">
        <h4 id="tituloCesta">Cesta</h4>
        <form method="post" action="finalizacion.php">
            <input type="hidden" name="arrayComanda" id="arrayComanda" value="">
            <input type="submit" id="comprar" value="Comprar">
        </form>
    </div>

    <div id="no_bar">
        <h1 id="titol">MENU</h1>
        <div id="items"></div>
    </div>

    <?php include("footer.php"); ?>

</body>

</html>