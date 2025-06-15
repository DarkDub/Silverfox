<?php

include 'validaciones/conexion.php';

$sql = "SELECT id, nombre, descripcion, precio, imagen FROM productos";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>admin</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="admin/src/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar" data-simplebar>
        <div class="d-flex mb-4 align-items-center justify-content-between">
            <a href="index.html" class="text-nowrap logo-img ms-0 ms-md-1">
              <img src="img/logo.jpeg" width="100" alt="">
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="mb-4 pb-2">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="admin.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-layout-dashboard fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Inicio</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">UI Componenst</span>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link warning-hover-bg"
                href="agregar_producto.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-warning rounded-3">
                  <i class="ti ti-article fs-7 text-danger"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Agregar Producto</span>
              </a>
            </li>
           
          </ul>
         

       
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>


    
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
   
<div class="container mt-3 py-5">
    <h1 class="text-center mb-3 py-5">Menú del Restaurante</h1>
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
            echo '<h5 class="card-title">' . $producto['nombre'] . '</h5>';
            echo '<p class="card-text">$' . $producto['precio'] . '</p>';
            echo '<a href="admin_product/editar_producto.php?id=' . $producto['id'] . '" class="btn btn-danger">editar</a>';
            echo '<a href="admin_product/confirmar_eliminacion.php?id=' . $producto['id'] . '" class="btn btn-primary mx-4">eliminar</a>';

            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>