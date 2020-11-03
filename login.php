<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario_ok = "ausias";
    $password_ok = "ausias";

    $usuario = $_POST["usuario"];
    $password = $_POST["contra"];

    if ($usuario === $usuario_ok && $password === $password_ok) {
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: interfaz.php");
    } else {
        echo "El usuario o la contraseña son incorrectos";
    }
}

?>