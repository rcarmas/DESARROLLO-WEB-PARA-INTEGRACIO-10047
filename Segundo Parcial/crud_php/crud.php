
<?php
function agregarContacto($nombre, $apellido, $direccion, $correo, $telefono) {
    global $conexion;

    $sql = "INSERT INTO contactos (nombre, apellido, direccion, correo, telefono) VALUES ('$nombre', '$apellido', '$direccion', '$correo', '$telefono')";

    if ($conexion->query($sql) === TRUE) {
        echo "Contacto agregado exitosamente";
    } else {
        echo "Error al agregar el contacto: " . $conexion->error;
    }
}

function obtenerContactos() {
    global $conexion;

    $sql = "SELECT * FROM contactos";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "ID: " . $fila["id"] . "<br>";
            echo "Nombre: " . $fila["nombre"] . "<br>";
            echo "Apellido: " . $fila["apellido"] . "<br>";
            echo "Dirección: " . $fila["direccion"] . "<br>";
            echo "Correo: " . $fila["correo"] . "<br>";
            echo "Teléfono: " . $fila["telefono"] . "<br><br>";
        }
    } else {
        echo "No se encontraron contactos";
    }
}

function actualizarContacto($id, $nombre, $apellido, $direccion, $correo, $telefono) {
    global $conexion;

    $sql = "UPDATE contactos SET nombre = '$nombre', apellido = '$apellido', direccion = '$direccion', correo = '$correo', telefono = '$telefono' WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Contacto actualizado exitosamente";
    } else {
        echo "Error al actualizar el contacto: " . $conexion->error;
    }
}

function eliminarContacto($id) {
    global $conexion;

    $sql = "DELETE FROM contactos WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Contacto eliminado exitosamente";
    } else {
        echo "Error al eliminar el contacto: " . $conexion->error;
    }
}
?>