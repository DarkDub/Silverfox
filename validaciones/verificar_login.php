<?php
include 'conexion.php'; // Incluye la conexión a la base de datos (ya definida previamentes).

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo_electronico = $_POST["correo_electronico"];
    $contrasena = $_POST["contrasena"];

    // Realiza la verificación de las credenciales del usuario.
    $sql = "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row["contrasena"])) {
            // Inicio de sesión exitoso, redirige al usuario al index.php.
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre_usuario'] = $row['nombre_usuario'];
            header('Location: index.php');
            exit();
        } else {
            echo "Contraseña incorrecta. <a href='login.php'>Intentar de nuevo</a>";
        }
    } else {
        echo "Correo electrónico no registrado. <a href='register.php'>Registrarse</a>";
    }
}
?>

