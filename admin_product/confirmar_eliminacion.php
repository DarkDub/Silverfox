
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>admin</title>
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
                <span class="hide-menu ms-2 ps-1">Agregar producto</span>
              </a>
            </li>
           
          </ul>
         

       
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>

    <div class="container mt-3 px-5">
    <h1 class="text-center mb-3 px-5"></h1>
    <div class="row">
  <div class="py-5">

  <div class="container-fluid px-5">
        <div class="card px-5">
          <div class="card-body px-5">
            <div class="text-center">

          <?php
        // Aquí debes realizar una consulta a la base de datos para obtener los productos de comida.
        // Reemplaza este ejemplo con la lógica de consulta real.

        // Supongamos que obtuviste los datos de la base de datos en $productos.


        include '../validaciones/conexion.php';

        if (isset($_GET['id'])) {
                $producto_id = $_GET['id'];
        
                // Verificar si se ha enviado una confirmación de eliminación
                if (isset($_POST['confirmacion'])) {
                    if ($_POST['confirmacion'] === 'confirmado') {
                        // Realizar la eliminación del producto
                        // Consulta para eliminar el producto en la base de datos
                        $sql = "DELETE FROM productos WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $producto_id);
        
                        if ($stmt->execute()) {
                            header('location:../admin.php');
                        } else {
                            echo "Error al eliminar el producto: " . $stmt->error;
                        }
        
                        // Cierra la conexión a la base de datos
                        $stmt->close();
                        $conn->close();
                    } else {
                        echo "Eliminación cancelada.";
                    }
                } else {
                    echo "<h3 class=''>¿Seguro que deseas eliminar este producto?<br></h3>";
                    echo "<form action='confirmar_eliminacion.php?id=$producto_id' method='POST'>";
                    echo "<input type='hidden' name='confirmacion' value='confirmado'>";
                    echo "<input type='submit' class='btn btn-warning m-5 text-light'value='Sí, eliminar'>";
                    echo "<a href='../admin.php' class='btn btn-danger'>Cancelar</a>";
                    echo "</form>";
                    
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
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>