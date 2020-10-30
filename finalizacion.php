<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de finalizacion</title>

    <?php include("include/includes.inc") ?>
    <script type="text/javascript" src="js/finalizacion.js"></script>

</head>
<body>

<!-- HEADER -->
    <header>
        <?php include("include/header.php"); ?>
    </header>

    <h1>FINALIZACION</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // print_r($_POST["arrayComanda"]);
            $arrayObject = json_decode($_POST["arrayComanda"]);
            // print_r($arrayObject);

            foreach ($arrayObject as $object => $value) {
                echo "nombre: ".$value->nombre;
                echo "<br>";
                echo "<br>";
                // echo "value: ".$value;
                // echo "<br>";
            }

        }

    ?>

    <br>
    <br>
    <form action="confirmacion.php" method="POST">
        <input id="inputHidden" name="inputHidden" type="hidden" value="">
        <input id="totalHidden" name="totalHidden" type="hidden" value="">
        <input name="inputConfirmar" type="submit" class="buttonFinalizacion buttonFinalizacionAzul" value="Confirmar">
    </form>

<!-- HEADER -->
    <footer>
        <?php include("include/footer.php"); ?>
    </footer>
</body>
</html>