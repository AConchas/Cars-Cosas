<?php
/**
 * Añade coches a la base de datos.
 * @author Conchaburu
 * @returns insert
 */
include("../Login/Konexioa.php");
$link=ConnectDataBase();


$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$tipo=$_POST['tipo'];
$prezio=$_POST['prezio'];




mysqli_query($link,
  "insert into coches
  values ('$marca','$modelo','$tipo','$prezio')");

mysqli_close($link);
header("Location: ../añadir_registros.php");
 ?>