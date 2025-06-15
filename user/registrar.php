<?php
include '../validaciones/conexion.php'; // Incluye la conexión a la base de datos (ya definida previamente).

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["nombre_usuario"];
    $correo_electronico = $_POST["correo_electronico"];
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre_usuario, correo_electronico, contrasena) VALUES ('$nombre_usuario', '$correo_electronico', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        header('location:../login.php');
    } else {
        echo "Error en el registro: " . $conn->error;
    }
}
?>
