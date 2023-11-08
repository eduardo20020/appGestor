<?php
require 'ClasseCarpeta.php';
$ob = new Carpeta();
$nom = $_POST['carpeta'];
$ob->crear($nom);
header("Location: ../VISTAS-PHP/ver.php");
?>