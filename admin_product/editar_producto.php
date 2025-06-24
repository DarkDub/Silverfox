<?php

include '../validaciones/conexion.php';

$sql = "SELECT id, nombre, descripcion, precio, imagen FROM productos";
$result = $conn->query($sql);
?>

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar producto</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../admin/src/assets/css/styles.min.css" />
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
            <a href="admin.php" class="text-nowrap logo-img ms-0 ms-md-1">
              <img src="../img/logo.jpeg" width="100" alt="">
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
                href="../admin.php"
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
                href="../agregar_producto.php"
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
    <h1 class="text-center mb-3 py-5">Editar Producto</h1>
    <div class="row">
    <div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center ">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 ">
        <?php
        if (isset($_GET['id'])) {
            $producto_id = $_GET['id'];
    
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Procesa la actualización del producto
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $precio = $_POST['precio'];
    
                // Consulta para actualizar el producto en la base de datos
                $sql = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssdi", $nombre, $descripcion, $precio, $producto_id);
    
                if ($stmt->execute()) {
                    echo "Producto actualizado correctamente.";
                    header('location:../admin.php');
                
                } else {
                    echo "Error al actualizar el producto: " . $stmt->error;
                }
    
                // Cierra la conexión a la base de datos
                $stmt->close();
                $conn->close();
            } else {
                // Consulta para obtener la información del producto
                $sql = "SELECT nombre, descripcion, precio FROM productos WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $producto_id);
                $stmt->execute();

                $resultado = $stmt->get_result();
    
                if ($resultado->num_rows == 1) {
                    $producto = $resultado->fetch_assoc();
                    ?>
                    <form action="editar_producto.php?id=<?php echo $producto_id; ?>" method="POST" autocomplete="off">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $producto['nombre']; ?>" required><br>
    
                        <label for="descripcion">Descripción:</label>
                        <textarea name="descripcion" class="form-control"><?php echo $producto['descripcion']; ?></textarea><br>
    
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio" class="form-control" value="<?php echo $producto['precio']; ?>" step="0.01" required><br>
    
                        <input type="submit" class="btn btn-success"value="Guardar Cambios">
                        <a href="../admin.php" class="btn btn-danger">canselar</a>
                    
                    </form>

                    <?php
                } else {
                    echo "Producto no encontrado.";
                }
    
                // Cierra la conexión a la base de datos
                $stmt->close();
                $conn->close();
            }
        } else {
            echo "Producto no especificado.";
        }
        ?>
    </div>
    </div>
    </div>
    </div>
    </div>
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
