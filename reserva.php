    <?php
    include 'menu.php';
    include 'validaciones/conexion.php';

    
    // // Verifica si el usuario ha iniciado sesión
    if (!isset($_SESSION['id'])) {
    //     // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    ?>
    <div class="py-5"></div>
    <div class="py-5"></div>
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
                        <img src="img/logo.jpeg" alt="">
                    </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                    <img src="img/user.svg" class="my-4" alt="" width="60">

                                    <h1 class=" text-gray-900 mb-4"> Hola!, ingresa a tu cuenta para realizar una reserva</h1>
                                    
                                </div>
                                    <a type="submit" class="btn btn-danger w-100 my-5" id="btn" href="registro.php">Crear cuenta</a>

                                    <div class="text-center h4">
                                        <a class="small text-danger" href="login.php">ingresar!</a>
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
       exit();
    }

    ?>


<main class="flex-shrink-0 my-3">
<div class="container">

    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <p>disfrute <span> su estancia</span> con nostros</p>
            </div>

            <div class="row g-0">

            <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                <form action="user/procesar_reserva.php" method="post" class="p-5" data-aos="fade-up" data-aos-delay="100" autocomplete="off">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                    <input type="text" name="nombre_cliente" class="form-control" id="name" placeholder=" Nombre" required>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="email" class="form-control" name="correo" id="email" placeholder="correo electronico" required>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="text" class="form-control" name="telefono" id="phone" placeholder="telefono" required>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="date" name="fecha_reserva" class="form-control" id="date"  required>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="time"  class="form-control" name="hora_reserva" id="time" required>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="number" class="form-control" name="num_personas" placeholder="personas" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje"></textarea>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-danger my-5" onclick="return confirm('¿Desea realizar la reseva?')">
                    
                Reservar una mesa</button></div>
            <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['id']  ?>"required><br><br>

                </form>
            </div><!-- End Reservation Form -->

            </div>

        </div>
        
        
        
        </section>
        </div>
</main>
        <?php include 'footer.php' ?>

        