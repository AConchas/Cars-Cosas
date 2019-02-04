<?php
include("../Login/Konexioa.php");
$link=ConnectDataBase();

$modelo=$_GET['modelo'];
mysqli_query($link,"delete from coches where modelo = '$modelo'");
mysqli_close($link);
header("Location: ../añadir_registros.php");
   ?>