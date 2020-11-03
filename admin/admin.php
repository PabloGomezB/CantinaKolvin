<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de administración</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="../libs/fontawesome5/css/all.min.css" rel="stylesheet">

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" width="130" height="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

    <h1>Mostrando comandas</h1>

    <?php
    
        $botones = '<input name="comanda" type="submit" class="display comanda" value="';
        $ruta = "../comandas/";

        // scandir: Escanea la ruta y devuelve todo su contenido (en sistemas Lunix devuelve "." y ".." tambien)
        // array_diff: Elimina los elementos del array que indiques en este caso array('..', '.').
        // array_slice: Reordena el array ya que al hacer array_diff las posiciones del array se mantienen intactas
        $ficheros = array_slice(array_diff(scandir($ruta), array('..', '.')), 0);

        if (empty($ficheros)){
            echo "No hay comandas";
        }
        else{
    ?>

        <div class="div-left">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

    <?php

        foreach ($ficheros as $comanda) {
            echo '<div class="celda">';
            echo $botones . $comanda . '"</input>';
            echo '</div>';
        }

        echo '</form>';
        echo '</div>';
        
        
        echo '<div class="div-right">';

        $rutaComandaSeleccionada = $ruta . $_POST['comanda'];
        
        echo nl2br(file_get_contents($rutaComandaSeleccionada));
        
        echo '</div>';
    }

        //print_r($ficheros);
        

    ?>

    <footer>
        <table class="centrar">
            <td>
                <a target="_blank" href="http://www.institutpedralbes.cat/">&copy; 2020 Institut Pedralbes</a> &middot;<a href="#">Términos y Condiciones</a>
            </td>
            <td>
                <ul>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                        <i class="fab fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                        <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </td>
            <td>
                <a class="float-right" href="#">Ir arriba</a>
        </td>
        </table>
    </footer>
</body>

</html>