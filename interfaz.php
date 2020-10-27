<?php
    session_start();

    if(empty($_SESSION["usuario"])){
        header("Location: administracion.php");
        exit();
    }

    echo "Estás logueado";
?>

<p>Esta será la interfaz después del login</p>

<a href="logout.php">Cerrar sesión</a>