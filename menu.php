

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

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>silverfox<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php#hero">Hogar</a></li>
          <li><a href="index.php#about">Acerca de</a></li>
          <li><a href="menus.php">Menu</a></li>
          <li><a href="index.php#events">Eventos</a></li>
          <li><a href="index.php#chefs">Chefs</a></li>
          <li><a href="index.php#gallery">Galeria</a></li>
          </li>
          <li><a href="index.php#contact">Contacto</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table py-" href="reserva.php">Reservar</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>



<?php
      session_start();
if(isset($_SESSION['id'])){
?>
                    <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle btn-book-a-table py-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i>
                      <?php 
                     echo $_SESSION['nombre_usuario']                    
                      ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="reservas_usuario.php">mis reservas</a></li>
                      <li><a class="dropdown-item" href="user/cerrar_sesion.php">cerrar sesion</a></li>
                    </ul>
                  </div>
                  <?php
                } else {
                    ?>
                      <a class="btn btn-book-a-table" href="login.php">iniciar sesion</a>

                <?php
                }
                ?>
 

    </div>

</header>
<div class="py-5"></div>




