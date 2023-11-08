<?php
session_start(); // iniciar la sesión 

if(isset($_SESSION['usuario'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* CSS personalizado para mantener el footer en la parte inferior de la página */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
            background-color: gray;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
</head>

<body>

    <!-- Este es el nav -->
    <nav class="navbar navbar-light" style="background-color: #6fce4d;">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 33vw;" src="../img/Logo3.png" alt=""></a>
            <div class="navbar" id="navbarNav">
                <a class="nav-link" href="Dashboard.php">Inicio</a>
                <a class="nav-link" href="../index.html">Salir</a>
                <a class="nav-link" href="#">Config</a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="content">
        <nav class="d-flex">

            <button class="p-2" onclick="alternarFormulario()">Crear Carpeta</button>

            <div id="formulario" style="display: none;">
                <form action="../CLASES-CONEXION/crearCarpeta.php" method="post">
                    <label for="nombre_carpeta">Nombre de la carpeta:</label>
                    <input type="text" id="nombre_carpeta" name="carpeta" placeholder="Nombre de la carpeta" required>
                    <input type="submit" value="Crear">
                </form>
            </div>

            <script>
                function alternarFormulario() {
                    var formulario = document.getElementById("formulario");
                    if (formulario.style.display === "none") {
                        formulario.style.display = "block";
                    } else {
                        formulario.style.display = "none";
                    }
                }
            </script>
        </nav>

        <nav class="d-flex">

            <button class="p-2" onclick="alternarFormulario2()">borrar Carpeta</button>

            <div id="formulario2" style="display: none;">
                <form action="../CLASES-CONEXION/borrarCarpeta.php" method="post">
                    <label for="nombre_carpeta">Nombre de la carpeta a borrar:</label>
                    <input type="text" id="nombre_carpeta" name="carpeta" placeholder="Nombre de la carpeta" required>
                    <input type="submit" value="Crear">
                </form>
            </div>

            <script>
                function alternarFormulario2() {
                    var formulario = document.getElementById("formulario2");
                    if (formulario.style.display === "none") {
                        formulario.style.display = "block";
                    } else {
                        formulario.style.display = "none";
                    }
                }
            </script>
        </nav>


        <nav class="d-flex">

            <button class="p-2" onclick="alternarFormulario3()">editar Carpeta</button>

            <div id="formulario3" style="display: none;">
                <form action="../CLASES-CONEXION/editarCarpeta.php" method="post">
                    <label for="nombre_carpeta">Nombre de la carpeta:</label>
                    <input type="text"  name="carpeta" placeholder="Nombre de la carpeta" required>
                    <input type="text"  name="nuevo" placeholder="nuevo nombre de la carpeta" required>
                    <input type="submit" value="Crear">
                </form>
            </div>

            <script>
                function alternarFormulario3() {
                    var formulario = document.getElementById("formulario3");
                    if (formulario.style.display === "none") {
                        formulario.style.display = "block";
                    } else {
                        formulario.style.display = "none";
                    }
                }
            </script>
        </nav>

        <div class="container text-center">
            <!-- Este es el bucle para mostrar archivos y carpetas con enlaces -->
            <?php
            $rutaCarpeta = "../CARPETAS/";

            $archivos = scandir($rutaCarpeta);
            foreach ($archivos as $archivo) {
                if ($archivo != '.' && $archivo != '..') {
                    $rutaArchivo = $rutaCarpeta . $archivo;
                    // Comprobamos si es un directorio o un archivo
                    if (is_dir($rutaArchivo)) {
                        // Si es un directorio, mostramos un enlace para abrirlo
                        echo '<div style = "border:solid" class = "d-flex"><a class="nav-link" href="' . $rutaArchivo . '/">' . $archivo . '</a><br></div>';
                        
                    } else {
                        // Si es un archivo, mostramos un enlace para abrirlo
                        echo '<div class = "d-flex"><a class="nav-link" href="' . $rutaArchivo . '">' . $archivo . '</a><br></div>';
                    }
                }
            }
            ?>

        </div>

        <div class="container text-center">
            <button type="button" onclick="location.href='prueba.php'">Subir archivo</button>
        </div>

    </div>

    <!-- Este es el footer -->
    <footer class="text-center py-3">
        <div>
            <p>Email: info@misitio.com</p>
            <p>Teléfono: 123-456-7890</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>

<?php
} else {
    echo "El usuario no está logueado";
}
?>
