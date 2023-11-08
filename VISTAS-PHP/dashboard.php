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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
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
</head>

<body>

    <!-- Este es el nav -->
    <nav class="navbar navbar-light" style="background-color: #6fce4d;">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 33vw;" src="../img/Logo3.png" alt=""></a>
            <div class="navbar" id="navbarNav">
                <a class="nav-link" href="#">Inicio</a>
                <a class="nav-link" href="../LOGIN-PHP/cerrarSession.php">Salir</a>
                <a class="nav-link" href="#">Config</a>
            </div>
        </div>
    </nav>


    

    <!-- Este es el formulario -->
    <?php
    session_start(); // iniciar la sesión 
    
    if(isset($_SESSION['usuario'])) {
    } else {
        echo "El usuario no está logueado";
    }
    ?>



<div>
    <div class="container py-4">
        <h3 class="display-3" >Bienvenido <?php echo $_SESSION['usuario'] . "!"?></h3>
    </div>
</div>    
<div class="content">
<div class="container d-flex justify-content-center align-items-center py-4">
        <div class="row w-100 py-4">
            <div class="col text-center">
                <a href="subir.php"><img class="img-fluid"  src="../img/cloud_computing_icon_129063.png"></a>
                <h3>Subir archivos</h3>
            </div>
            <div class="col text-center">
                <a href="ver.php"><img class="img-fluid"  src="../img/photosfolderblank_99366.png"></a>
                <h3>Ver archivos</h3>
            </div>
        </div>
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
