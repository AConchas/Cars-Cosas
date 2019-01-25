<?php

try{

$conexion = new PDO('mysql:host=localhost; dbname=tiendacoches', 'root', '');

 $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $conexion->exec("SET CHARACTER SET utf8");



 $rows = [];

 $query = $conexion->prepare("SELECT username, passcode FROM admin  WHERE username = :user AND passcode = :pass");
 
  $query->bindParam(':user', $_GET['user'], PDO::PARAM_STR);
  $query->bindParam(':pass', $_GET['pass'], PDO::PARAM_STR);

  $query->execute();

 while($rsItem = $query->fetch(PDO::FETCH_ASSOC)) {

	   $rows[] = $rsItem;

    }

}catch(PDOException $e){

      die('Error en la consulta: <br>'.$e->getMessage());

}

 echo json_encode($rows);


?>