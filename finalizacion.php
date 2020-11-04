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
            <div class="col-md-6 col px-md-5">
                <form action="confirmacion.php" method="POST" class="form">
                    <img src="img/finalizacion/contacto.png" class="formImg" />
                    <label>Nombre y apellidos: <span>*</span></label>
                    <input type="text" name="nombre" placeholder="Nombre y apellido" class="formInput" required>

                    <label>Teléfono: <span>*</span></label>
                    <input type="number" name="telefono" placeholder="Telefeno" class="formInput" required>

                    <label>Email: <span>*</span></label>
                    <input type="email" name="email" placeholder="Email" class="formInput" required>

                    <input id="inputHidden" name="inputHidden" type="hidden" value="">
                    <input id="totalHidden" name="totalHidden" type="hidden" value="">
                    <input name="inputConfirmar" type="submit" class="buttonFinalizacion buttonFinalizacionAzul" value="Confirmar">
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