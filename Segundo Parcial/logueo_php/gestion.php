<?php
// Obtener los valores ingresados por el usuario
$username = $_POST['username'];
$password = $_POST['password'];

// Realizar la verificación en la base de datos
// Reemplaza los valores de conexión con los correctos para tu configuración
$servername = "localhost";
$db_username = "root";
$db_password = "";
$database = "usuarios";

$conn = mysqli_connect($servername, $db_username, $db_password, $database);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta para verificar los datos de inicio de sesión
$query = "SELECT * FROM registro WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

include 'autenticacion.php';

// Cerrar la conexión
mysqli_close($conn);
?>