<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pantalla de finalizacion</title>

    <?php include("includes.inc") ?>

    <link rel="stylesheet" href="css/finalizacion.css">
</head>
<body>

<!-- HEADER -->
    <header>
        <?php include("header.php"); ?>
    </header>

    <h1>FINALIZACION</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // print_r($_POST["arrayComanda"]);
            $arrayObject = json_decode($_POST["arrayComanda"]);
            // print_r($arrayObject);

            foreach ($arrayObject as $object => $value) {
                echo "object: ".$value->nombre;
                echo "<br>";
                // echo "value: ".$value;
                // echo "<br>";
            }
        }
    ?>

<!-- HEADER -->
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>