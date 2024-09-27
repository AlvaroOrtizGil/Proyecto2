<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio"; // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener todos los usuarios (excepto el campo de contraseña)
$sql = "SELECT nombre, apellido1, apellido2 FROM usuarios";
$result = $conn->query($sql);

// Crear un array para almacenar los usuarios
$usuarios = array();

if ($result->num_rows > 0) {
    // Agregar los usuarios al array
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}

// Devolver los datos en formato JSON
echo json_encode($usuarios);

$conn->close();
?>
