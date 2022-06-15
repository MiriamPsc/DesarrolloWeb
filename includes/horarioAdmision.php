<!DOCTYPE html>
    <html lang="es">
        
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <script src="js/bootstrap.bundle.min.js"> </script>
                <title>Horarios y Admisiones | Institución Jeffersonian</title>

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

                <main class="container py-5">
                    <h1 class="pt-5">Horario y Admisiones</h1>
                    <p class="lead text-muted">La entrada es gratuita en todos los recintos pertenecientes a la institución, pero se requieren pases de entrada programada. Todos los museos Smithsonian y el zoológico están cerrados el <b>25 de diciembre</b>.</p>
                    <p class="lead text-muted">Revise nuestros consejos y pautas ya que los protocolos COVID-19 y los requisitos de máscara están <b>sujetos a cambios</b>.</p>     
                    <hr class="my-5">

                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 g-3">                        
                        <div class="col group-left">
                            <h5><strong><span class="delta">Galería Arthur M. Sackler (Washington, DC)</span></strong><br/></h5><strong>
                            <span class="text-burgundy text-danger">Abierto hasta el 6 de Julio 2022</span></strong><br/> 
                            <p>Miércoles a Sábado 11 a.m. a 4 p.m.<br />
                            (Cerrado de Domingo a Martes)<br /><strong>Abrirá todos los días a partir del 30 de Mayo</strong></p>                            
                            <h5><strong><span class="delt a">Museo Nacional del Aire y el Espacio de Estados Unidos (Washington, DC)</span></strong><br /><strong></h5>
                            <span class="text-burgundy text-danger">Cerrado hasta Octubre 2022</span></strong>
                            <p></p>
                            <h5><strong><span class="delta">Parque Zoológico Nacional del Jeffersonian (Washington, DC)</span></strong><br/></h5>
                            <p>Todos los días de  8 a.m. a 4 p.m.<br />
                            <h5><strong><span class="delta">Museo Nacional de Diseño Cooper-Hewitt (Nueva York)</span></strong><br/></h5>
                            <p>Jueves a Lunes 10 a.m. a 6 p.m.<br />
                            (Cerrado Martes y Miércoles)<br /><strong>Abrirá todos los días a partir del 30 de Mayo</strong></p>                            
                            <p><meta charset="UTF-8" /></p>
                        </div>

                        <div class="col group-right last">
                            <h5><strong><span class="delta">Edificio de las Artes y la Industria (Washington, DC)</span></strong><br/><strong></h5>
                            <span class="text-burgundy text-danger">Abierto hasta el 6 de Julio 2022</span></strong><br/> 
                            (Cerrado Martes y Miércoles)<br /><p></p>
                            <h5><strong><span class="delta">Centro de Estudios Planetarios y de la Tierra (Washington, DC)</span></strong><br/></h5>
                            <p>Martes a Domingo 10 a.m. a 5:30 p.m.<br />
                            (Cerrado Lunes)<br /><strong>Abrirá todos los días a partir del 30 de Mayo</strong></p>                            
                            <h5><strong><span class="delta">Museo Nacional de Arte y Cultura Afroamericana (Nueva York)</span></strong><br/></h5>
                            <p>Miércoles a Lunes 10 a.m. a 5:30 p.m.<br />
                            (Cerrado Martes)<br /><strong>Abrirá todos los días a partir del 30 de Mayo</strong></p>
                            <h5><strong><span class="delta">Museo de Arte Asiático (Washington, DC)</span></strong><br/><strong></h5>
                            <span class="text-burgundy text-danger">Cerrado hasta Septiembre 2022</span></strong>
                            <p></p>
                        </div>
                    </div>



                    
                    
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



                </main>

                
            </body> 
    </html>