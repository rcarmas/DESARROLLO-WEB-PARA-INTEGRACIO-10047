<?php

include 'crud.php';

$host = "localhost";
$usuario = "root";
$contraseña = "";
$baseDeDatos = "usuarios";

$conexion = new mysqli($host, $usuario, $contraseña, $baseDeDatos);

if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}


// Agregar un nuevo contacto
agregarContacto("Juan", "Perez", "Calle 123", "juan@example.com", "123456789");

// Obtener la lista de contactos
obtenerContactos();

// Actualizar un contacto existente
actualizarContacto(1, "Juan", "Perez", "Calle 456", "juan@example.com", "987654321");

// Eliminar un contacto
eliminarContacto(1);

$conexion->close();

?>