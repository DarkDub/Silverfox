<?php

include 'menu.php';
include 'validaciones/conexion.php';

$sql = "SELECT id, nombre, descripcion, precio, imagen FROM productos";
$result = $conn->query($sql);
?>

</head>
<body>

<div class="container mt-3 py-5">
    <h1 class="text-center mb-4 py-5">Menú del Restaurante</h1>
    <div class="row">
        <?php
        // Aquí debes realizar una consulta a la base de datos para obtener los productos de comida.
        // Reemplaza este ejemplo con la lógica de consulta real.

        // Supongamos que obtuviste los datos de la base de datos en $productos.
        foreach ($result as $producto) {

            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card product-card">';
            echo '<img src="' . $producto['imagen'] . '" class="card-img-top" alt="' . $producto['nombre'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="py-2">' . $producto['nombre'] . '</h5>';
            echo '<p class="card-text">$' . $producto['precio'] . '</p>';
            echo '<a href="detalle_menu.php?id=' . $producto['id'] . '" class="btn btn-danger mt-5">Ver detalles</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
</script>
</body>


</html>