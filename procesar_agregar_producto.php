<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Realiza la conexión a la base de datos (asegúrate de tener la conexión aquí)
include 'validaciones/conexion.php';
    // Recopila los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    // Procesa la imagen
    if (isset($_FILES['imagen'])) {
        $imagen = $_FILES['imagen'];
        $imagen_nombre = $imagen['name'];
        $imagen_temp = $imagen['tmp_name'];
        $imagen_ruta = 'assets/img/menu/' . $imagen_nombre; // Ruta donde deseas guardar la imagen

        if (move_uploaded_file($imagen_temp, $imagen_ruta)) {
            // La imagen se subió correctamente, puedes guardar $imagen_ruta en la base de datos
            // Consulta para agregar el producto a la base de datos
            $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssds", $nombre, $descripcion, $precio, $imagen_ruta);

            if ($stmt->execute()) {
                // Redirige al catálogo de productos o muestra un mensaje de éxito
                header("Location: admin.php");
            } else {
                // Muestra un mensaje de error
                echo "Error al agregar el producto: " . $stmt->error;
            }

            // Cierra la conexión a la base de datos
            $stmt->close();
        } else {
            // Error al subir la imagen
            echo "Error al subir la imagen.";
        }
    } else {
        // No se proporcionó una imagen
        echo "Por favor, seleccione una imagen.";
    }
}
?>
