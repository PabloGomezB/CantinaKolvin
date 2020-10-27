<?php
    session_start();
    session_destroy();
    header("Location: administracion.php");
?>