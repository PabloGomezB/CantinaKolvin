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
    <header>
        <?php include("include/header.php"); ?>
    </header>

    <h1>FINALIZACION</h1>

    <br>

    <div id="tabla"></div>
    
    <br>

    <h3>Productos del carrito</h3>
    <div id="tabla"></div>
    </table>

        
  
    <form action="confirmacion.php" method="POST"  class="form">
        <img src="img/finalizacion/contacto.png" class="formImg"/>
        <label>Nombre y apellidos: <span>*</span></label>
        <input type="text" name="nombre" placeholder="Nombre y apellido" class="formInput" required>
        
        <label>Teléfono: <span>*</span></label>
        <input type="email" name="telefono" placeholder="Telefeno" class="formInput" required>
        
        <label>Email: <span>*</span></label>
        <input type="email" name="email" placeholder="Email" class="formInput" required>

        <input id="inputHidden" name="inputHidden" type="hidden" value="">
        <input id="totalHidden" name="totalHidden" type="hidden" value="">
        <input name="inputConfirmar" type="submit" class="buttonFinalizacion buttonFinalizacionAzul" value="Confirmar">
    </form>


<!-- HEADER -->
    <footer>
        <?php include("include/footer.php"); ?>
    </footer>
</body>
</html>