<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de administración</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <?php include("include/includes.inc") ?>

</head>

<body>

    <!-- HEADER -->
    <header>
        <?php include("include/header.php"); ?>
    </header>

    <h1>Mostrando comandas</h1>

    <?php



        $ruta = "../comandas";

        function dir_is_empty($ruta) {
            $handle = opendir($ruta);
            while (false !== ($entry = readdir($handle))) {
              if ($entry != "." && $entry != "..") {
                closedir($handle);
                return FALSE;
              }
            }
            closedir($handle);
            return TRUE;
        }

        print_r(dir_is_empty($ruta));

    ?>

    <!-- HEADER -->
    <footer>
        <?php include("include/footer.php"); ?>
    </footer>
</body>

</html>