<?php
session_start(); // iniciar la sesión 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     //incluyo la conexion
     include ("../CLASES-CONEXION/conexion.php");

     //obtengo los datos del formulario 
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];

    // Consulta SQL para verificar el usuario y la contraseña
    $sql = "SELECT * FROM registros WHERE usuario = '$usuario' AND pass = '$pass'";
    $resultado = mysqli_query($conexion, $sql);

    //inicio sesion
    if ($resultado->num_rows > 0) {
        //vinculo el usuario y el departamento con una session
        $_SESSION['usuario']=$usuario;
        include ("getDepartamento.php");

        // Usuario y contraseña coinciden en la base de datos
        header("Location: ../VISTAS-PHP/dashboard.php");
        exit;    
     } else {
        // Usuario o contraseña incorrectos
        echo "Inicio de sesión fallido. Verifica tus credenciales.";
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>