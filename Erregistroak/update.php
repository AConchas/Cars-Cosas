<?php
include("../Login/Konexioa.php");
$link=ConnectDataBase();

$modelo=$_POST["modelo"];
$marca=$_POST["marca"];
$tipo=$_POST["tipo"];
$prezioa=$_POST["prezioa"];



$sql ="UPDATE coches
		SET 
			marca = '$marca',
            modelo = '$modelo',
			tipo = '$tipo',
			prezioa = '$prezioa'
		WHERE modelo = '$modelo'";

if ($link->query($sql)==TRUE) {
	ECHO "New record created succesfully.";
}
else{
	echo "Error:".$sql."<br>".$link->error;
}
mysqli_close($link);

header("Location:../añadir_registros.php");

?>
