<?php
require_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreCompleto = $_POST['nombreCompleto'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $correoElectronico = $_POST['correoElectronico'];
    $contraseña = $_POST['contraseña'];
    $confirmContraseña = $_POST['confirmContraseña'];

    $registro = new Registration();
    $resultado = $registro->registrarse($nombreCompleto, $nombreUsuario, $correoElectronico, $contraseña, $confirmContraseña);

    if ($resultado == 10) {
        header('Location: index.php');
        exit(); // Asegúrate de usar exit() después de header para detener la ejecución del script
    } else {
        $mensajeError = '';
        switch ($resultado) {
            case 1:
                $mensajeError = 'El usuario o correo electrónico ya existe.';
                break;
            case 100:
                $mensajeError = 'Las contraseñas no coinciden.';
                break;
            default:
                $mensajeError = 'Error en el registro. Inténtalo de nuevo.';
                break;
        }
        echo $mensajeError;
    }
}
?>