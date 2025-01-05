<?php
$servername = "localhost";
$username = "root"; // Nombre de usuario por defecto en XAMPP
$password = ""; // Contraseña por defecto en XAMPP
$dbname = "datos_clientes"; // Nombre de tu base de datos en phpMyAdmin

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capturar datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['numero'];
$email = $_POST['correo'];

// Insertar datos en la tabla
$sql = "INSERT INTO datos_personales (nombre, apellido, numero, correo) VALUES ('$nombre', '$apellido', '$telefono', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "¡Registro exitoso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
