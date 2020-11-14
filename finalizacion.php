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
        <?php include("include/header.php"); ?>

        <div class="container-fluid" style="margin-bottom: 50px; margin-top: 50px; margin-left: 50px;">
            <div class="row mx-md-4">
                <div id="tabla" class="col-md-6 col px-md-5"></div>
                <div class="col-md-5 col px-md-4">
                    <img src="img/finalizacion/contacto.png" class="formImg" />
                    <form action="confirmacion.php" method="POST" class="formFinalizacion">
                        <label style="margin-top:20px;">Nombre y apellidos: <span>*</span></label>
                        <input id="nombre" type="text" name="nombre" placeholder="Nombre y apellidos" style="height:30px;font-size:medium;" class="formInput" required>
                            <span><img id="imgNombre" src="img/finalizacion/ko.png" class="icono"></span>
                        </input>
                        <label>Teléfono: <span>*</span></label>
                        <input id="numero" type="text" name="telefono" placeholder="Teléfono" style="height:30px;font-size:medium;" class="formInput" required>
                            <img id="imgNumero" src="img/finalizacion/ko.png" class="icono" />
                        </input>
                        <label>Email: <span>*</span></label>
                        <input id="email" type="email" name="email" placeholder="Correo electrónico" style="height:30px;font-size:medium;" class="formInput" required>
                            <img id="imgEmail" src="img/finalizacion/ko.png" class="icono" />
                        </input>
                        <input id="inputHidden" name="inputHidden" type="hidden" value="">
                        <input id="totalHidden" name="totalHidden" type="hidden" value="">
                        <input id="confirmar" name="inputConfirmar" type="submit" class="buttonFinalizacion" value="Confirmar">
                    </form>
                </div>
            </div>
        </div>

    <!-- FOOTER -->
        <?php include("include/footer.php"); ?>
</body>

</html>