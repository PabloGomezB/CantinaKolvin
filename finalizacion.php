<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //     // print_r($_POST["arrayComanda"]);
        //     $arrayObject = json_decode($_POST["arrayComanda"]);
        //     // print_r($arrayObject);

        //     foreach ($arrayObject as $object => $value) {
        //         echo "nombre: ".$value->nombre;
        //         echo "<br>";
        //         echo "<br>";
        //         // echo "value: ".$value;
        //         // echo "<br>";
        //     }
        // }
    ?> 

    <br>
    <br>
    <button class="buttonFinalizacion buttonFinalizacionAzul" onclick="">Confirmar</button>

<!-- HEADER -->
    <footer>
        <?php include("include/footer.php"); ?>
    </footer>
</body>
</html>