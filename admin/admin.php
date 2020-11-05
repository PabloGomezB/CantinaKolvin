<?php
ob_start();
?>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    <link rel="stylesheet" href="../css/style.css">

    <title>Admin</title>
  </head>
  <body>
    
    <span class="blur">
        <header class="hindex">
            <div class="logo">
                <a href="index.php"><img src="../img/logo.png" width="150" height="80"></a>
            </div>
            <nav id="navBar" class="navOpciones">
                <a class="opciones" href="index.php">Inicio</a>
                <a class="opciones" href="menu.php">Carta</a>
                <a class="opciones" href="./admin/admin.php">Administración</a>
            </nav>
        </header>
        
        <div class="index">

            <!-- SLIDER BOOTSTRAP-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="height: 500px;">
                    <div class="item active">
                        <img src="../img/index/entradaCantina.jpg" alt="Entrada" class="imagenesSlider">
                    </div>

                    <div class="item">
                        <img src="../img/index/recepcionCantina.jpg" alt="Recepcion" class="imagenesSlider">
                    </div>

                    <div class="item">
                        <img src="../img/index/comedorCantina.jpg" alt="Comedor" class="imagenesSlider">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- DESCRIPCION -->

            <div class="descripcion">
                <h1 class="titulos">Cantina Kolvin</h1>
                <p class="descripcionContenido margenes">En la cantina kolvin encontrarás un lugar dedicado a aperitivos caseros, como bocatas, pizza, bebidas, etc., junto a un ambiente agradable, el cual te dejará a gusto y satisfecho. Si no nos crees, ven y compruébalo tu mismo.</p>
            </div>

            <!-- SLOGAN -->

            <div class="eslogan">
                <h1 class="titulos">Almorzar, mi momento favorito del día</h1>
            </div>

            <!-- CARTA -->

            <div class="cartaIndex">
                <h1 class="titulos" style="margin-bottom: 5%;">Nuestra Carta</h1>
                <div class="d-flex justify-content-around">
                    <div class="p-2">
                        <img class="imagenesCarta" src="../img/menu/cafe.jpg" alt="Café" width="300px" height="300px">
                        <div class="cafe" style="">Café</div>
                    </div>
                    <div class="p-2">
                        <img class="imagenesCarta" src="../img/menu/sopa.jpg" alt="Sopa" width="300px" height="300px">
                        <div class="sopa">Sopa</div>
                    </div>
                    <div class="p-2">
                        <img class="imagenesCarta" src="../img/menu/cruasan.jpg" alt="Cruasan" width="300px" height="300px">
                        <div class="cruasan">Croissant</div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="findex">
            <div class="contentFooter">
                <h4>Horarios</h4>
                <div>Lunes - Viernes: 7:00h - 18:00h</div>
            </div>
            <div class="contentFooter">
                <div>Dirección: Av. Esplugues 13 Barcelona, España</div>
                <div>Teléfono: 999-999-999</div>
                <div>E-mail: cantinakolvin@inspedralbes.cat</div>
            </div>
            <div class="contentFooter">
                <h4>Encuéntranos</h4>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x fa-fw" style="color: white;"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook fa-2x fa-fw" style="color: white;"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter fa-2x fa-fw" style="color: white;"></i></a>
            </div>
        </footer>
    </span>
    
<!-- AQUI EMPIEZA EL POPUP -->

    <div id="modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <span class="modal-header pb-3">
                    <div class="btn-group">
                        <button type="button" class="display buttonFinalizacion dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Comandas
                        </button>
                        <button id="volver" type="button" class="btnVolver btnVolverNegro">Volver</button>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                            <div id="lista" class="dropdown-menu" style="height:300px;width:200px;overflow-y:auto;padding:10px;">
                                
                            </div>
                        </form>
                    </div>
                </span>
                <div class="modal-body">
                    <div id="texto">
                        Selecciona un fichero para ver su contenido
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <?php
        
        $ruta = "../comandas/";

        // scandir: Escanea la ruta y devuelve todo su contenido (en sistemas Lunix devuelve "." y ".." tambien)
        // array_diff: Elimina los elementos del array que indiques en este caso array('..', '.').
        // array_slice: Reordena el array ya que al hacer array_diff las posiciones del array se mantienen intactas
        $ficheros = array_slice(array_diff(scandir($ruta), array('..', '.')), 0);
        if (empty($ficheros)){
            echo '<script type="text/javascript">';
            echo 'document.getElementById("texto").innerHTML="No hay comandas guardadas";';
            echo 'document.getElementById("lista").innerHTML="No hay comandas guardadas";';
            echo '</script>';
        }
        else{
            echo '<script type="text/javascript">';
            foreach ($ficheros as $comanda) {        
                echo 'document.getElementById("lista").insertAdjacentHTML(`beforeend`,`<input name="comanda" type="submit" style="width:100%; margin-bottom: 10px;" value="'. $comanda.'">`);';
            }
            echo '</script>';

            if(isset($_POST['comanda'])){
                $rutaComandaSeleccionada = $ruta . $_POST['comanda'];
                $contenido = nl2br(file_get_contents($rutaComandaSeleccionada));

                if(empty($contenido)){
                    echo '<script type="text/javascript">';
                    echo 'document.getElementById("texto").innerHTML=`El fichero está vacío`;';
                    echo '</script>';
                }else{
                    echo '<script type="text/javascript">';
                    echo 'document.getElementById("texto").innerHTML=`'.$contenido.'`;';
                    echo '</script>';
                }
            }
           
        }

    ?>

    <script type="text/javascript">

        $('#modal').modal({
            backdrop: 'static',
            keyboard: false
        })

        $('#modal').modal('show');

        document.getElementById("volver").onclick = function () {
            location.href = "../index.php";
        };
    </script>

  </body>
</html>