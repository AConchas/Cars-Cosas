<?php

$server = 'localhost:8080';
$username = 'root';
$password = '';
$database = 'tiendacoches';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>