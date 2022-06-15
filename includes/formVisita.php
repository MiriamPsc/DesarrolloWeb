<!DOCTYPE html>
    <html lang="es">
    
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <script src="js/bootstrap.bundle.min.js"> </script>
            <title>Solicitar Visita | Institución Jeffersonian</title>

            <link rel="canonical" href="http://localhost/geniuslab/tipoInstrumento.php" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

            <!-- Bootstrap core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet"/>
            <script src="form-validation.js"></script>

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
                    <a href="inicio.php" class="navbar-brand d-flex align-items-center">
                                <strong>Institución Jeffersonian</strong>
                    </a>


                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                          <div class="offcanvas bg-dark offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title text-white"  id="offcanvasNavbarLabel">Menú</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                    
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                                <li class="nav-item">
                                    <a class="nav-link active fixed-dark" aria-current="page" href="inicio.php">Inicio</a>
                                </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link active fixed-dark" aria-current="page" href="instituciones.php">Instituciones</a>
                                </li>
                            
                                <li lass="nav-item">
                                    <a class="nav-link active fixed-dark" aria-current="page" href="departamentos.php">Departamentos</a>
                                </li>                               

                                <li class="nav-item">
                                    <a class="nav-link active fixed-dark" aria-current="page" href="beneficiarios.php">Beneficiarios</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Visitas
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                        <li><a class="dropdown-item" href="horarioAdmision.php">Horario y Admisiones</a></li>
                                        <li><a class="dropdown-item" href="consejosPautas.php">Consejos y Pautas</a></li>
                                    </ul>
                                </li>  
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Perfil
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                        <li><a class="dropdown-item" href="perfil.php">Perfil Principal</a></li>
                                        <li><a class="dropdown-item" href="visitas.php">Solicitudes de Visitas</a></li>
                                        <hr class="dropdown-divider">
                                        <li><a class="dropdown-item" href="logout.php" >Salir</a></li>
                                    </ul>
                                </li>   
                            </ul>

                            <div class="d-grid gap-2">
                                <a class="btn btn-warning" href="formVisita.php" role="button">Solicitar Visita</a>
                                <a class="btn btn-danger" href="logout.php" role="button">Cerrar Sesión</a>
                            </div>
                          </div>
                </nav>
            </header>

            

            <main>
                <div class="container pt-5 ">
                    <h1 class="pt-5">Solicitud de Visita</h1>
                    <p class="lead text-muted">La seguridad de los visitantes, voluntarios, personal y colecciones del Smithsonian es de suma importancia. Como la colección de museos y galerías más querida del país, trabajamos arduamente todos los días para garantizar la preservación de los tesoros de nuestro país para el disfrute de las generaciones venideras. </p>
                    <hr class="my-5">

                        <div class="g-5 container align-middle" >
                            <div class="col-md-5 form-container position-relative col-lg-8">
                              
                            <form class="needs-validation position-relative" action="indexVisita.php" method="post">
                                    <div class="row container" style=justify-content:center>
                                        <label for="tipo" class="form-label">Tipo de Visita</label>
                                            <select class="form-select" name="tipo" for="floatingInput" required>
                                                <option value="">Seleccionar...</option>
                                                    <option>Empresarial</option>
                                                    <option>Escolar</option>
                                                    <option>Personal</option>
                                                    <option>Prensa</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Por favor selecciona un tipo de visita válido.
                                            </div>  
                                        <hr class="my-3">
                                        
                                        <div class="col-sm-4">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" for="floatingInput" name="nombre" placeholder="" required>
                    
                                           
                                            <div class="invalid-feedback">
                                            Se requiere un nombre válido.
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                                            <input type="text" class="form-control" name="apellidoPaterno" placeholder="" required>
                                            <div class="invalid-feedback">
                                                Se requiere un apellido válido.
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                                            <input type="text" class="form-control" name="apellidoMaterno" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Se requiere un apellido válido.
                                            </div>
                                        </div>

                                        <div >
                                            <label for="institucion" class="form-label">Institución</label>
                                            <select class="form-select" name="insti" required>
                                                <option value="">Seleccionar...</option>
                                                <option>Galería Arthur M. Sackler</option>
                                                <option>Parque Zoológico Nacional del Jeffersonian</option>
                                                <option>Museo Nacional de Diseño Cooper-Hewitt</option>
                                                <option>Centro de Estudios Planetarios y de la Tierra</option>
                                                <option>Museo Nacional de Arte y Cultura Afroamericana</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Por favor selecciona una institución válida.
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="numeroPases" class="form-label">Pases</label>
                                            <input type="number" class="form-control" name=numeroPases min="1" max="10">
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="fecha" class="form-label">Fecha</label>
                                                <div class="input-group date" name="datepicker">
                                                    <input type="date" class="form-control" name=fecha>
                                                </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="hora" class="form-label">Horario</label>
                                            <select class="form-select" name="horario" required>
                                            <option value="">Seleccionar...</option>
                                                <option>09:00</option>
                                                <option>09:30</option>
                                                <option>10:00</option>
                                                <option>10:30</option>
                                                <option>11:30</option>
                                                <option>12:00</option>
                                                <option>12:30</option>
                                                <option>13:00</option>
                                                <option>13:30</option>
                                                <option>14:00</option>
                                                <option>14:30</option>
                                                <option>15:00</option>
                                                <option>15:30</option>
                                                <option>16:00</option>
                                                <option>16:30</option>
                                                <option>17:00</option>
                                                <option>17:30</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Por favor selecciona un horario válido.
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-4">
                                    <input class="w-100 btn btn-lg btn-primary" value="Enviar solicitud" type="submit">
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <div class="b-example-divider">

                <div class="container">
                <footer class="row row-cols-5 py-5 my-5 border-top">
              <div class="col">
                <a href="inicio.php" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                  <img class="bi me-2" src="images/logo.png" width="40" height="40" href="#"></img>
                </a>
                <p class="text-muted">!aftxescilx &copy; 2022</p>
              </div>

              <div class="col">
                <h5>Menú</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Inicio</a></li>
                    <li class="nav-item mb-2"><a href="instituciones.php" class="nav-link p-0 text-muted">Instituciones</a></li>
                    <li class="nav-item mb-2"><a href="departamentos.php" class="nav-link p-0 text-muted">Departamentos</a></li>
                    <li class="nav-item mb-2"><a href="beneficiarios.php" class="nav-link p-0 text-muted">Beneficiarios</a></li>
                  </ul>
              </div>

              <div class="col">
                    <h5>Visitas</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="formVisita.php" class="nav-link p-0 text-muted">Solicitar visita</a></li>
                        <li class="nav-item mb-2"><a href="horarioAdmision.php" class="nav-link p-0 text-muted">Horarios y Admisiones</a></li>
                        <li class="nav-item mb-2"><a href="consejosPautas.php" class="nav-link p-0 text-muted">Consejos y pautas</a></li>
                    </ul>
              </div>

              <div class="col">
                    <h5>Perfil</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="perfil.php" class="nav-link p-0 text-muted">Perfil Principal</a></li>
                        <li class="nav-item mb-2"><a href="visitas.php" class="nav-link p-0 text-muted">Solicitudes de Visitas</a></li>
                        <li class="nav-item mb-2"><a href="logout.php" class="nav-link p-0 text-muted">Salir</a></li>
                    </ul>
              </div>
            </footer>
                </div>
            </div>
        </body>
    </html>