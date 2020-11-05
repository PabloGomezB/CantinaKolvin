<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de finalizacion</title>

    <?php include("include/includes.inc") ?>
    <script type="text/javascript" src="js/finalizacion.js"></script>
</head>

<body>

    <!-- HEADER -->
    <header id="hindex">
        <?php include("include/header.php"); ?>
    </header>

    <div class="container-fluid" style="margin-bottom: 50px; margin-top: 50px; margin-left: 50px;">
        <div class="row mx-md-4">
            <div id="tabla" class="col-md-6 col px-md-5"></div>
            <div class="col-md-5 col px-md-4">
                <img src="img/finalizacion/contacto.png" class="formImg" />
                <form action="confirmacion.php" method="POST" class="form">
                    
                    <label>Nombre y apellidos: <span>*</span></label>
                    <input id="nombre" type="text" name="nombre" placeholder="Nombre y apellidos" class="formInput" required>
                    <img src="img/finalizacion/ko.png" class="icono" />
                    
                    <label>Teléfono: <span>*</span></label>
                    <input id="numero" type="text" name="telefono" placeholder="Teléfono" class="formInput" required>
                    <img src="img/finalizacion/ko.png" class="icono" />
                    
                    <label>Email: <span>*</span></label>
                    <input id="email" type="email" name="email" placeholder="Correo electrónico" class="formInput" required>
                    <img src="img/finalizacion/ko.png" class="icono" />

                    <input id="inputHidden" name="inputHidden" type="hidden" value="">
                    <input id="totalHidden" name="totalHidden" type="hidden" value="">

                    <input name="inputConfirmar" type="submit" class="buttonFinalizacion" value="Confirmar">
                </form>
            </div>
        </div>
    </div>
    <!-- HEADER -->
    <footer id="findex">
        <?php include("include/footer.php"); ?>
    </footer>
</body>

</html>