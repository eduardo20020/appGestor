<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //incluyo la conexion
    include ("../CLASES-CONEXION/conexion.php");

    //obtengo los datos del formulario
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];
    $departamento = $_POST["departamento"];
    $correo = $_POST["correo"];

    //hago la consulta sql para insertar datos de los usuarios
    $sql = "INSERT INTO registros VALUES ('$usuario', '$pass','$departamento','$correo')";
    $resultado = mysqli_query($conexion, $sql);

    //doy un mensaje si la insersion fue correcta
    if ($resultado) {
        echo "Inserción exitosa.";
        header("Location: ../index.html");

    } else {
        echo "Error en la inserción: " . mysqli_error($conexion);
    }

    //cierro la conexion
    mysqli_close($conexion);
}
?>








































