<?php
if (isset ($_POST["submit"])){
    $correo = $_POST ["correo"];
    $contrasena = $_POST ["contrasena"];
    if (empty($correo)){
        $resultado2 = "Ingresar tu correo";
    } else{
        if (strlen ($contrasena) <8){
            $resultado1 = "contraseña incorrecta. La contraseña be de ser mayor de ocho digitos.";
        }
    }
    echo "Tu email es: $correo";
    echo "Tu contraseña es: $contrasena";
    $nombre = $_POST ["nombre"];
    $numero = $_POST ["telefono"];
    $edad = $_POST ["edad"];
    if (strlen ($nombre) <12){
        $resultado1 = "nombre invalido. El nombre debe tener más de diez digitos.";
        if (strlen ($nombre)>15){
            $resultado1 = "nombre invalido. El nombre debe tener menor de quince digitos.";
        }
    }
    if ($edad < 12){
        echo"el usuario tiene que ser mayor de 12 años y menor de 15";
    }
    if ($numero == +57){
        echo"$numero";
    }}


?>