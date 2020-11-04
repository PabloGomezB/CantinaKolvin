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
                //setcookie("fecha[dia]", $fecha, time() + 3);
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

                fwrite($file, "|------------------------------ Pedido número: " . $numeroPedido . " ------------------------------]" . PHP_EOL .
                    "|> Nombre: " . $nombre . PHP_EOL .
                    "|> Teléfono: " . $telefono . PHP_EOL .
                    "|> Email: " . $email . PHP_EOL .
                    "|" . PHP_EOL);

                foreach ($arrayObject as $object => $value) {

                    echo $value["nombre"] . ": " . $value["cantidad"] . "<br>";
                    fwrite($file, "|--> " . $value["nombre"] . ": " . $value["cantidad"] . PHP_EOL);
                }

                fwrite($file, "|" . PHP_EOL .
                    "|> TOTAL: " . $total . " €" . PHP_EOL .
                    "|------------------------------------]\n\n");
                fclose($file);
            }

            enviarEmail($email);

            echo '<h1>PEDIDO REALIZADO CON EXITO</h1>';
        }

        function enviarEmail($email)
        {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $from = "a18jorcalari@inspedralbes.cat";
            $to = $email;
            $subject = "Checking PHP mail";
            $message = "PHP mail works just fine";
            $headers = 'From: '.$from. "\r\n" .
                'Reply-To: '. $to . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
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