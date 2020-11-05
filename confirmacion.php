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

            $dia = date('d-m-Y');
            $hora = date(' H:i');
            $ruta = "./comandas/$dia.txt";

            if (!isset($_COOKIE['fecha'])) {
                //setcookie("fecha[dia]", $dia, time() + 24 * 3600);
                //setcookie('fecha[hora]', $hora, time() + 24 * 3600);
                setcookie("fecha[dia]", $dia, time() + 3);
                setcookie('fecha[hora]', $hora, time() + 3);
            }

            if (isset($_POST['inputHidden'])) {

                $nombre = $_POST['nombre'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];

                $total = $_POST['totalHidden'];

                $numeroPedido = contadorPedidos($ruta);

                $file = fopen($ruta, "a") or die("Unable to open file!");

                $arrayObject = json_decode($_POST["inputHidden"], true);

                $mensaje="|------------------------------ Pedido número: " . $numeroPedido . " ------------------------------]" . PHP_EOL .
                    "|> Fecha: " . $dia . " [". $hora ."]" . PHP_EOL .
                    "|> Nombre: " . $nombre . PHP_EOL .
                    "|> Teléfono: " . $telefono . PHP_EOL .
                    "|> Email: " . $email . PHP_EOL .
                    "|" . PHP_EOL;

                fwrite($file, $mensaje);

                foreach ($arrayObject as $object => $value) {
                    $mensaje.="|--> " . $value["nombre"] . ": " . $value["cantidad"] . PHP_EOL;
                    echo $value["nombre"] . ": " . $value["cantidad"] . "<br>";
                    fwrite($file, $mensaje);
                }

                $mensaje.="|" . PHP_EOL .
                "|> TOTAL: " . $total . " €" . PHP_EOL .
                "|------------------------------------]\n\n";
                fwrite($file, $mensaje);
                fclose($file);
            }

            enviarEmail($email,$numeroPedido,$mensaje);

            echo '<h1>PEDIDO REALIZADO CON EXITO</h1>';
        }

        function enviarEmail($email,$numeroPedido,$mensaje){
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $from = "cantina@kolvincorporation.com";
            $to = $email;
            $subject = "Resumen de la comanda";
            $headers = 'From: '.$from. "\r\n" .
                'Reply-To: '. $to . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $mensaje, $headers);
            echo "The email message was sent.";
        }


        function contadorPedidos($ruta)
        {
            $contador = 0;
            $fichero = fopen($ruta, "r");
            while (($buffer = fgets($fichero)) !== false) {
                if (strpos($buffer, '€') !== false) {
                    $contador++;
                }
            }
            fclose($fichero);
            $contador++;
            return $contador;
        }


        ?>
    </div>
    <!-- HEADER -->
    <footer id="findex">
        <?php include("include/footer.php"); ?>
    </footer>
</body>

</html>