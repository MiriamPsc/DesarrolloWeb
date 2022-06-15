<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="js/bootstrap.bundle.min.js"> </script>
        <title>Instituciones | Institución Jeffersonian</title>

        <link rel="canonical" href="http://localhost/geniuslab/instituciones.php" />

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>

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

        <main class="container py-5">

            <h1 class="pt-5">Instituciones</h1>
            <p class="lead text-muted">Instituciones que conforman el complejo de la Institución Jeffersonian.</p>
            <hr class="my-5">

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                           <div class="card shadow-sm">
                                <img src="images/instituciones/galeria.jpg" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                     role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Galería Arthur M. Sackler">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                <div class="card-body">
                                    <b><p style="font-size:150%;">Galería Arthur M. Sackler</p></b>
                                    <p class="card-text">Washington D. C.</p>
                                    <p class="card-text">Estados Unidos de América</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-sm btn-outline-secondary" href="https://www.si.edu/museums/sackler-gallery" target="_blank">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="images/instituciones/aire y espacio.jpg" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Museo Nacional del Aire y el Espacio de Estados Unidos">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                <div class="card-body">
                                    <p class="card-text"></p>
                                    <b><p style="font-size:150%;">Museo Nacional del Aire y el Espacio de Estados Unidos</p></b>
                                    <p class="card-text">Washington D. C.</p>
                                    <p class="card-text">Estados Unidos de América</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-sm btn-outline-secondary" href="https://www.si.edu/museums/air-and-space-museum-udvar-hazy-center">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="images/instituciones/zoo.jfif" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Parque Zoológico Nacional del Jeffersonian">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                <div class="card-body">
                                    <b><p style="font-size:150%;">Parque Zoológico Nacional del Jeffersonian</p></b>
                                    <p class="card-text">Washington D. C.</p>
                                    <p class="card-text">Estados Unidos de América</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" href="https://www.si.edu/museums/national-zoo">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="images/instituciones/diesño.jfif" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Museo Nacional de Diseño Cooper-Hewitt">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                            </img>

                                <div class="card-body">
                                    <b><p style="font-size:150%;">Museo Nacional de Diseño Cooper-Hewitt</p></b>
                                    <p class="card-text">Nueva York.</p>
                                    <p class="card-text">Estados Unidos de América</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" href="https://www.si.edu/museums/cooper-hewitt-smithsonian-design-museum">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="images/instituciones/artes.jpg" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Museo Nacional del Aire y el Espacio de Estados Unidos">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                            </img>

                                <div class="card-body">
                                    <b><p style="font-size:150%;">Edificio de las Artes y la Industria</p></b>
                                    <p class="card-text">Washington D. C.</p>
                                    <p class="card-text">Estados Unidos de América</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" href="https://www.si.edu/museums/arts-and-industries-building">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="images/instituciones/tropical.jpg" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Instituto Jeffersoniano de Investigaciones Tropicales">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                            </img>

                                <div class="card-body">
                                    <b><p style="font-size:150%;">Instituto Jeffersoniano de Investigaciones Tropicales</p></b>
                                    <p class="card-text">Barro Colorado</p>
                                    <p class="card-text">Panamá</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" href="https://stri.si.edu/es">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="images/instituciones/planetarios.jpg" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Centro de Estudios Planetarios y de la Tierra">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                            </img>

                                <div class="card-body">
                                    <b><p style="font-size:150%;">Centro de Estudios Planetarios y de la Tierra</p></b>
                                    <p class="card-text">Washington D. C.</p>
                                    <p class="card-text">Estados Unidos de América</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" href="https://www.si.edu/museums/air-and-space-museum">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="images/instituciones/afroamericana.jpg" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Museo Nacional de Arte y Cultura Afroamericana">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                            </img>

                                <div class="card-body">
                                    <b><p style="font-size:150%;">Museo Nacional de Arte y Cultura Afroamericana</p></b>
                                    <p class="card-text">Nueva York.</p>
                                    <p class="card-text">Estados Unidos de América</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" href="https://www.si.edu/museums/african-american-museum">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="images/instituciones/instituto.jpg" class="bd-placeholder-img card-img-top" width="250" height="300" xmlns="http://www.w3.org/2000/svg" 
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Instituto Jefersoniano">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                            </img>

                                <div class="card-body">
                                    <b><p style="font-size:150%;">Instituto Jeffersonian</p></b>
                                    <p class="card-text">Washington D. C.</p>
                                    <p class="card-text">Estados Unidos de América</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" href="https://www.si.edu/museums/smithsonian-institution-building">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <div class="b-example-divider"></div>

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
    </body>
</html>