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

    <link rel="stylesheet" href="../css/style.css">

    <title>Admin</title>
  </head>
  <body>
    
    <span class="blur">
        <header id="hindex">
            <div id="logo">
                <a href="index.php"><img src="img/logo.png" width="150" height="80"></a>
            </div>
            <nav id="navOpciones">
                <a class="opciones" href="index.php">Inicio</a>
                <a class="opciones" href="menu.php">Carta</a>
                <a class="opciones" href="./admin/admin.php">Administración</a>
            </nav>
        </header>
        <div id="index">
            <div id="banner"></div>
            <div id="descripcion">
                <h1 style="margin-bottom: 2%; margin-top: 2%;">Cantina Kolvin</h1>
                <p id="descripcionContenido">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam illum officiis tempore. Atque, sunt ratione asperiores dignissimos aperiam laborum odio dolor nostrum quis, exercitationem vero ducimus, tenetur nobis nesciunt veniam.
                Aliquam optio voluptate ipsam omnis, ea voluptatem. Magnam reprehenderit sunt nisi aperiam, eius dicta laboriosam iure placeat ipsa. Molestias nostrum incidunt quos ad aut beatae ipsa culpa fugiat iusto quas.
                Reprehenderit libero quidem velit quis dolorem. Quis, odit perferendis. Praesentium voluptates accusantium minima reiciendis? Rerum consectetur, tempora quo inventore reprehenderit, nulla dicta molestiae cupiditate quod autem, aut in maxime quis.
                In nam odio cupiditate incidunt sequi sed aperiam quas praesentium blanditiis tempora voluptatum doloremque error, aliquam quisquam eligendi officia quaerat ea repellat molestias repellendus assumenda reprehenderit odit pariatur deserunt? Quia!
                Nesciunt error dolorum tempora voluptas quidem earum quisquam laborum est alias esse. Corporis, eligendi illo officia labore fugiat quidem qui, suscipit ipsa deleniti officiis cum. Odit exercitationem saepe ratione. Incidunt?</p>
            </div>
            <div id="eslogan">
                <h1>Almorzar, mi momento favorito del día</h1>
            </div>
            <div id="carta">
                <h1 style="margin-bottom: 5%; margin-top: 2%;">Nuestra Carta</h1>
                <div style="display: flex;">
                    <img class="imagenes" src="img/menu/cafe.jpg" alt="Café" width="150px">
                    <img class="imagenes" src="img/menu/sopa.jpg" alt="Sopa" width="150px">
                    <img class="imagenes" src="img/menu/cruasan.jpg" alt="Cruasan" width="150px">          
                </div>
                <div style="display: flex;">
                    <p id="cafe">Café</p>
                    <p id="sopa">Sopa</p>
                    <p id="cruasan">Cruasan</p>
                </div>
            </div>
        </div>
        <footer id="findex">
            <div class="contentFooter">
                <h5>Horarios</h5>
                <h5>Lunes - Viernes: 7:00h - 18:00h</h5>
            </div>
            <div class="contentFooter">
                <h5>Dirección: Av. Esplugues 13 Barcelona, España</h5>
                <h5>Teléfono: 999-999-999</h5>
                <h5>E-mail: cantinakolvin@inspedralbes.cat</h5>
            </div>
            <div class="contentFooter">
                <h5>Encuéntranos</h5>
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
                <div class="modal-header pb-3">
                    <div class="btn-group">
                        <button type="button" class="display comanda dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Comandas
                        </button>
                        <button id="volver" type="button" class="btn btn-secondary">Volver</button>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                            <div id="lista" class="dropdown-menu" style="height:300px;width:200px;overflow-y:auto;padding:10px;">
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="texto">
                        Selecciona un fichero para ver su contenido
                    </div>
                </div>
                <!-- <div class="modal-footer">
                </div> -->
            </div>
        </div>
    </div>
  
    <?php
        
        //$botones = `<input name='comanda' type='submit' class='display comanda' value='`;
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
                echo 'document.getElementById("lista").insertAdjacentHTML(`beforeend`,`<input name="comanda" type="submit" class="btn btn-outline-dark" style="width:100%; margin-bottom: 10px;" value="'. $comanda.'">`);';
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