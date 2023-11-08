<?php
session_start(); // Inicia o reanuda la sesión

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    // El usuario ha iniciado sesión, eliminemos la sesión y las variables de sesión
    session_unset(); // Elimina todas las variables de sesión
    session_destroy(); // Cierra la sesión

    // Redirige al usuario a la página de inicio o a donde desees
    header("Location: ../index.html");
    exit;
} else {
    // Si el usuario no ha iniciado sesión, redirígelo a la página de inicio de sesión
    header("Location: ../index.html");
    exit;
}
?>
