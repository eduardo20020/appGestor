<?php
require 'ClasseCarpeta.php';
$ob = new Carpeta();
$nom = $_POST['carpeta'];
$ob->borrar($nom);
header("Location: ../VISTAS-PHP/ver.php");
?>