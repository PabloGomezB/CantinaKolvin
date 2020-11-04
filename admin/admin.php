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
        
    </header>

    <h1>Mostrando comandas</h1>

    <?php
    
        //$botones = `<input name='comanda' type='submit' class='display comanda' value='`;
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



    <div id="stylized" class="div-total">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
            <div id="0" class="div-left">
                
            </div>
            <div id="1" class="div-left">
                
            </div>


    <?php
        
        $columna = 0;
        echo '<script>';
        
        foreach ($ficheros as $comanda) {
            
            echo 'document.getElementById("'.$columna.'").insertAdjacentHTML(`beforeend`,`<input name="comanda" type="submit" class="display comanda" value="'. $comanda.'">`);';

            if($columna == 0){
                $columna++;
            }
            else{
                $columna--;
            }
            
        }
        echo '</script>';
     
        
        $rutaComandaSeleccionada = $ruta . $_POST['comanda'];
        
            echo '<div class="div-right">';
                echo nl2br(file_get_contents($rutaComandaSeleccionada)); 
            echo '</div>';
        echo '</form>';
    echo '</div>';
        
    }        

    ?>

    <footer>
    </footer>
</body>

</html>