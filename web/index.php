<?php
$servername = "db";
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Verificar si las variables de entorno están configuradas
if (!$username || !$password || !$dbname) {
    die("Error: Las variables de entorno no están configuradas correctamente.");
}

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
echo "¡Conexión exitosa!. Waskar Enrique Añil 2022-1506";
?>