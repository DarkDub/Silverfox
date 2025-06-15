<?php
include '../validaciones/conexion.php'; // Incluye la conexión a la base de datos (ya definida previamente)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cliente = $_POST["nombre_cliente"];
    $usuario_id = $_POST["usuario_id"];
    $fecha_reserva = $_POST["fecha_reserva"];
    $hora_reserva = $_POST["hora_reserva"];
    $num_personas = $_POST["num_personas"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];

    $sql = "INSERT INTO reservaciones (nombre_cliente, fecha_reserva, hora_reserva, num_personas, correo, telefono, usuario_id) VALUES ('$nombre_cliente', '$fecha_reserva', '$hora_reserva', $num_personas, '$correo', '$telefono', '$usuario_id')";

    if ($conn->query($sql) === TRUE) {

        header('location:../reserva.php');
    } else {
        echo "Error al realizar la reserva: " . $conn->error;
    }
}
?>
