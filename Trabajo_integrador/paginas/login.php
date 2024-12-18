<?php

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if ($usuario == "admin" && $password == "1234") {
        header("Location: tabla_producto.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }

?>