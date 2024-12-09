<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'netflix_db';

// Crear la conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 
?>