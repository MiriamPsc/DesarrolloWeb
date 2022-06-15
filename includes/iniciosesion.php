<!DOCTYPE html>
<html lang="es">

   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <script src="js/bootstrap.bundle.min.js"> </script>
      <title>Iniciar sesión</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/" />
      
      <!-- Bootstrap core CSS -->
      <link href="../includes/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="../includes/css/signin.css" rel="stylesheet">
      
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="images/logo.png" sizes="180x180" />
      <link rel="icon" href="images/logo.png" sizes="32x32" type="image/png" />
      <link rel="icon" href="images/logo.png" sizes="16x16" type="image/png" />
      <link rel="manifest" href="manifest.json"/>
      <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#7952b3" />
      <link rel="icon" href="images/logo.png"/>
      <meta name="theme-color" content="#7952b3"/>
      <link href="footers.css" rel="stylesheet">
      
      <style>
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         }
      </style>
   </head>

   <body>
        <header>
            <nav class="navbar navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    <a href="inicio.php" class="navbar-brand nav-link d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"></svg>
                    <strong>Institución Jeffersonian</strong>
                    </a>
                </div>
            </nav>
        </header>

        <div class="modal fade" id="modalSalir">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Cerrar Sesión</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    ¿Estás segura de que desea cerrar sesión?
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                    <a type="button" class="btn btn-danger" data-bs-dismiss="modal" href="includes/logout.php">Continuar</a>
                </div>
                </div>
            </div>
        </div>

        <main class="form-signin">
            <div class="py-5 text-center container">
                <section class="py-5 text-center container">
                    <div>
                        <form action="" method="POST">
                            <img class="mb-4" src="images/logo.png" alt="" width="72" height="72"/>
                            <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="username"></p>
                                <label for="floatingInput">Usuario</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password"></p>
                                <label for="floatingPassword">Contraseña</label>
                            </div>
                            <!-- <div class="checkbox mb-3">
                                <label> <input type="checkbox" value="remember-me"/> Remember me </label>
                                </div> -->
                            <div class="form-floating">
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Inciar Sesión</button> 
                                <hr>
                                <a class="w-100 btn btn-lg btn-danger" href="../redirect.php">Google</a> 
                                <hr>
                                <a class="w-100 txt" data-bs-toggle="modal" data-bs-target="#modalRegistro">Regístrate</a> 
                                <hr>
                            </div>
                            <p class="mt-5 mb-3 text-muted">!aftxescilx &copy; 2022</p>
                        </form>
                    </div>
                </section>
            </div>
        </main>

            <div class="modal fade" id="modalRegistro">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Registrarse</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="row container" style=justify-content:center>
                            <form action="registro.php" method="POST">
                                <div class="mb-3">
                                    <label for="nombre" class="col-form-label">Nombre</label>
                                    <input type="text" class="form-control" for="floatingInput" name="nombre" placeholder="" required>
                                    <div class="invalid-feedback">
                                    Se requiere un nombre válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control" name="apellidoPaterno" placeholder="" required>
                                    <div class="invalid-feedback">
                                    Se requiere un apellido válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="apellidoPaterno" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control" name="apellidoMaterno" placeholder="" required>
                                    <div class="invalid-feedback">
                                    Se requiere un apellido válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                    Se requiere un apellido válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="password"></p>                                                    
                                    <div class="invalid-feedback">
                                    Se requiere un apellido válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="apellidoPaterno" class="form-label">Correo electrónico</label>
                                    <input type="text" class="form-control" name="email" placeholder="" required>
                                    <div class="invalid-feedback">
                                    Se requiere un apellido válido.
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                    <input type="submit" class="btn btn-warning" data-bs-dismiss="modal" href="registro.php" value="Registrarme">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>