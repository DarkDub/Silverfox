    <?php include 'menu.php' ?>



    <div class="container mt-4 py-5">

<?php
        include 'validaciones/conexion.php'; // Incluye la conexión a la base de datos.

        if (isset($_SESSION["id"])) {
            $usuario_id = $_SESSION["id"]; // Obtén el ID del usuario autenticado desde la sesión
        
            $sql = "SELECT nombre_cliente, fecha_reserva, hora_reserva, num_personas, correo, telefono  FROM reservaciones WHERE usuario_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $usuario_id);
            $stmt->execute();
            $stmt->bind_result($nombre, $fecha, $reserva, $personas, $correo, $telefono);
        
            ?>
            <h2 class="py-5"> Mis Reservas</h2>
        <?php
            while ($stmt->fetch()) {
        ?>
                <table class="table table-bordered my-5">
                <thead>
                    <tr>
                        
                        <th class="text-danger">nombre</th>
                        <th class="text-danger">fecha</th>
                        <th class="text-danger">hora</th>
                        <th class="text-danger">personas</th>
                        <th class="text-danger">correo</th>
                        <th class="text-danger">telefono</th>
                    </tr>
                </thead>
                <tbody>
        
            <tr>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $fecha ?></td>
                    <td><?php echo $reserva ?></td>
                    <td><?php echo $personas ?></td>
                    <td><?php echo $correo ?></td>
                    <td><?php echo $telefono ?></td>
                  </tr>
        
        </tbody></table>
        <?php
        

            }
            $stmt->close();

        }
        ?>
        
        
        
        
        </div>
        
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