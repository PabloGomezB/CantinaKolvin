<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pantalla de confirmacion</title>

    <?php include("include/includes.inc") ?>

</head>
<body>

<!-- HEADER -->
    <header>
        <?php include("include/header.php"); ?>
    </header>

    <h1>CONFIRMACION</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!isset($_COOKIE['fecha'])) {
                $dia = date('d-m-Y');
                $hora = date (' H:i');
                setcookie("fecha[dia]", $dia, time() + 24 * 3600);
                setcookie('fecha[hora]', $hora, time() + 24 * 3600);
                // setcookie("fecha[dia]", $fecha, time() + 3);
                // setcookie('fecha[hora]', $hora, time() + 3);
                
                
            }else{
                header("Location: ./error.php");
                die();
            }

            $file = fopen("comandas/$dia.txt", "w");

            // print_r($_POST["arrayComanda"]);
            $arrayObject = json_decode($_POST["arrayComanda"]);
            // print_r($arrayObject);

            foreach ($arrayObject as $object => $value) {
                echo "nombre: ".$value->nombre;
                echo "<br>";
                echo "<br>";
                fwrite($file, "Nombre: " . $value->nombre . PHP_EOL);
                // echo "value: ".$value;
                // echo "<br>";
            }


            fclose($file);
        }
    ?>


    

<!-- HEADER -->
    <footer>
        <?php include("include/footer.php"); ?>
    </footer>
</body>
</html>