<?php
include 'menu.php';
include 'validaciones/conexion.php';

// Verifica si se proporciona un ID de producto en la URL
    if (isset($_GET['id'])) {
        $producto_id = $_GET['id'];

        $sql = "SELECT nombre, descripcion, precio, imagen FROM productos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $producto_id);
        $stmt->execute();
        $resultado = $stmt->get_result();


        // Cierra la conexión a la base de datos
        $stmt->close();
        $conn->close();
    } else {
        echo "Producto no especificado.";
    }
    ?>





?>





<style>
        .menu-details {
            background-color: #FFF; /* Fondo de tarjeta blanca */
            color: #333; /* Texto oscuro en tarjeta */
            border-radius: 10px;
            padding: 20px;
        }
        #buttom-menu:hover{
            background-color: #fff;
            transition: 0.5s All;
            color: black;

        }
    
    </style>
</head>
<body>
<div class="container mt-4 py-5">
<?php

if ($resultado->num_rows == 1) {
            $producto = $resultado->fetch_assoc();
 ?>               
 <div class="menu-details py-5">
        <div class="row">
            <div class="col-md-6">
            
     <?php
if (!empty($producto['imagen'])) {
    echo "<img src='{$producto['imagen']}' alt='{$producto['nombre']}'><br>";
?>
<?php

} else {
    echo "Imagen no disponible.";
}
?>
            </div>
            <div class="col-md-6">
            <h1 class="display-4 py"><?php echo $producto['nombre'] ?></h1>
                <p class="my-5"><strong >Precio:</strong>$ <?php echo $producto['precio'] ?></p>
                <p class="my-5"><strong >Ingredientes:</strong> Listado de ingredientes y detalles del plato.</p>
                <p class="my-5"><strong >Calorías:</strong> 450 kcal</p>
                <p class="my-5"><strong >Disponibilidad:</strong> Disponible todos los días.</p>
                <p class=""><strong >Descripcion:</strong></p>
                <p class="lead"><?php echo $producto['descripcion'] ?></p>
                <a href="menus.php" class="btn btn-danger btn-lg my-5" id="buttom-menu">volver a los menu </a>
            </div>
        </div>
    </div>
</div>
<?php
} else {
    echo "Producto no encontrado.";
}


include 'footer.php';

?>


</body>
</html>
