<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de confirmacion</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <?php include("include/includes.inc") ?>

</head>

<body>

    <!-- HEADER -->
    <header id="hindex">
        <?php include("include/header.php"); ?>
    </header>
    <div>
        <h1>CONFIRMACION</h1>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!isset($_COOKIE['fecha'])) {
                $dia = date('d-m-Y');
                $hora = date(' H:i');
                //setcookie("fecha[dia]", $dia, time() + 24 * 3600);
                //setcookie('fecha[hora]', $hora, time() + 24 * 3600);
                //setcookie("fecha[dia]", $fecha, time() + 3);
                setcookie('fecha[hora]', $hora, time() + 3);
            }

            if (isset($_POST['inputHidden'])) {
                $total = 0;
                //$file = fopen("comandas/$dia.txt", "w");

                $array_items = array("Café" => 0, "Croissant" => 0, "Caracola" => 0, "Pizza" => 0, "Monster" => 0, "Ensaimada" => 0);

                $arrayObject = json_decode($_POST["inputHidden"], true);

                foreach ($arrayObject as $object => $value) {

                    echo $value["cantidad"];

                    



                    // switch ($value["nombre"]) {

                    //     case "cafe":
                    //         $array_items["Café"] += 1;
                    //         break;
                    //     case "bocadillo de queso":
                    //         $array_items["Croissant"] += 1;
                    //         break;
                    //     case "cruasan":
                    //         $array_items["Caracola"] += 1;
                    //         break;
                    //     case "ensaimada":
                    //         $array_items["Pizza"] += 1;
                    //         break;
                    //     case "bocadillo de fuet":
                    //         $array_items["Monster"] += 1;
                    //         break;
                    //     case "Monster":
                    //         $array_items["Ensaimada"] += 1;
                    //         break;
                    //     case "Monster":
                    //         $array_items["Sopa"] += 1;
                    //         break;
                    //     case "Monster":
                    //         $array_items["Macarrones"] += 1;
                    //         break;
                    //     case "Monster":
                    //         $array_items["Ensaimada"] += 1;
                    //         break;
                    //     case "Monster":
                    //         $array_items["Ensaimada"] += 1;
                    //         break;
                    //     default:
                    //         echo "<br>error<br>";
                    //         break;
                    //}

                    //       echo "nombre: ".$value->nombre;
                    //       echo "<br>";
                    //echo($value["nombre"]);
                    //echo $array_items["Monster"];
                    //       echo "<br>";
                    //       $total += $value->precio;

                    //fwrite($file, "Nombre: " . $value->nombre . PHP_EOL);

                }



                /*
                    $arrayLimpio = array_unique($arrayObject);
                    print_r($arrayLimpio);
                    
                    echo "<br>";
                    print_r($array_items["Monster"]);

                    // foreach($arrayLimpio as $objeto => $valor){

                    //     echo "<br>";
                    //     print_r($valor["nombre"]);
                    //     echo "<br>";
                    // }



                    // echo $array_items["cafe"] . "<br>";
                    // echo $array_items["bocadillo de queso"] . "<br>";
                    //echo $total;
                    //fwrite($file, "++++++++++++++++++++++++++++++++++++++++++++++++++++++++" . PHP_EOL . "TOTAL: " . $total);
                    //fclose($file);
    */
            }


            if (isset($_POST['totalHidden'])) {

                print_r($_POST['totalHidden']);
            }



            echo '<h1>PEDIDO REALIZADO CON EXITO</h1>';
        }

        ?>
    </div>
    <!-- HEADER -->
    <footer id="findex">
        <?php include("include/footer.php"); ?>
    </footer>
</body>

</html>