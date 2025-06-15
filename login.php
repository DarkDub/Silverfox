<?php include 'menu.php' ?>

<!--  Body Wrapper -->
<div class="container">

  <div class="page-wrapper my-5" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="img/user.svg" width="50" alt="">
                </a>
                <h5 class="text-center">iniciar sesion</h5>
                <form action="user/verificar_login.php" method="post" autocomplete="off">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="correo_electronico"id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena" required>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input danger" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-danger fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-danger w-100 fs-4 mb-4 rounded-2 btn book-a-table">iniciar sesion</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0">no tienes cuenta?</p>
                    <a class="text-danger fw-bold ms-2" href="registro.php">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</div>

<?php include 'footer.php' ?>

</html>