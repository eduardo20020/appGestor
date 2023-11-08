<?php
require 'ClasseCarpeta.php';
$ob = new Carpeta();
$nom = $_POST['carpeta'];
$nuevo = $_POST['nuevo'];

$ob->editar($nom,$nuevo);
header("Location: ../VISTAS-PHP/ver.php");
?>