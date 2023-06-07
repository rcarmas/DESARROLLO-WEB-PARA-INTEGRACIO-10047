<?php
// Verificar si se encontró un usuario válido
if (mysqli_num_rows($result) == 1) {
    // Iniciar sesión
    session_start();

    // Guardar el nombre de usuario en una variable de sesión
    $_SESSION['username'] = $username;

    // Redirigir al usuario a la página de inicio
    header("Location: ./html/crud.html");
} else {
 
    // Autenticación fallida, mostrar mensaje de error
    echo "<script>alert('Inicio de sesión fallido. Usuario o contraseña incorrectos.');</script>";

    // Redirigir al usuario nuevamente al formulario de inicio de sesión
    header("Refresh: 1; URL=index.html");
}
?>