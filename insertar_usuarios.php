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

// Verificar si los datos están disponibles
if (isset($_POST['nombre']) && isset($_POST['apellido1']) && isset($_POST['apellido2']) && isset($_POST['pass'])) {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido1 = $conn->real_escape_string($_POST['apellido1']);
    $apellido2 = $conn->real_escape_string($_POST['apellido2']);
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT); // Encriptar la contraseña

    // Insertar los datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, pass) VALUES ('$nombre', '$apellido1', '$apellido2', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
