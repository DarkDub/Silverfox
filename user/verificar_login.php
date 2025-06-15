<?php
include '../validaciones/conexion.php'; // Incluye la conexión a la base de datos (ya definida previamente).

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
            header('Location: ../index.php');
            exit();
        } else {
            echo "Contraseña incorrecta. <a href='login.php'>Intentar de nuevo</a>";
        }
    } else {
            ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>golden age Restaurant - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
        
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css); 

/* Bootstrap Icons */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
</style>
  <!-- =======================================================
  * Template Name: silverfox
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="py-5">

<main class="flex-shrink-0 my-3">
<div class="container">

<!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                        <img src="../img/logo.jpeg" alt="">
                    </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                    <img src="../img/user.svg" class="my-4" alt="" width="60">

                                    <h1 class=" text-gray-900 mb-4"> Hola!, parece que el usuario y/o contraseña no estan registrado</h1>
                                    
                                </div>

                                    <div class="text-center h4">
                                        <a class="small text-danger" href="../login.php">volver a intentar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

</div>
        <?php
    
}
}
?>



<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>