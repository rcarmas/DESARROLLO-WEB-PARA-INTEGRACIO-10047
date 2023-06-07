<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para crear un nuevo usuario
function crearUsuario($conn, $usuario, $clave) {
    $sql = "INSERT INTO registro (username, password) VALUES ('$usuario', '$clave')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario creado exitosamente.";
    } else {
        echo "Error al crear el usuario: " . $conn->error;
    }
}

// Función para leer todos los usuarios
function obtenerUsuarios($conn) {
    $sql = "SELECT username, password FROM registro";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Imprimir los datos en la tabla
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "No se encontraron usuarios.";
    }
}

// Función para actualizar un usuario
function actualizarUsuario($conn, $usuario, $clave) {
    $sql = "UPDATE registro SET password = '$clave' WHERE username = '$usuario'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario actualizado exitosamente.";
    } else {
        echo "Error al actualizar el usuario: " . $conn->error;
    }
}

// Función para eliminar un usuario
function eliminarUsuario($conn, $usuario) {
    $sql = "DELETE FROM registro WHERE username = '$usuario'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado exitosamente.";
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }
}

crearUsuario($conn, "jose", "1234");
?>