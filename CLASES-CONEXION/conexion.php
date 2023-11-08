<?php
$servername = "localhost"; // Nombre del servidor MySQL
$username = "brandon"; // Nombre de usuario de MySQL
$password = "12345"; // Contraseña de MySQL
$database = "GESTOR"; // Nombre de la base de datos

$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}else{
    
}

?>