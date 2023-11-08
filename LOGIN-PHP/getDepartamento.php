<?php
session_start(); // iniciar la sesión 

     //incluyo la conexion
     include ("../CLASES-CONEXION/conexion.php");

    // Consulta SQL para verificar el usuario y la contraseña
    $sql = "SELECT departamento FROM registros WHERE usuario = '$_SESSION[usuario]'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        // Comprueba si la consulta devolvió algún resultado
        if (mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado); // Obtiene la primera fila del resultado
            $valor = $fila['departamento']; // Obtiene el valor de la columna
            $_SESSION['departamento']=$valor;

        } else {
            echo "No se encontraron resultados para la condición de selección.";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

?>