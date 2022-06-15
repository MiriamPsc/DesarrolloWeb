<!DOCTYPE html>
<html lang="es">
    
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="js/bootstrap.bundle.min.js"> </script>
        <title>Beneficiarios | Institución Jeffersonian</title>

        <link rel="canonical" href="http://localhost/geniuslab/tipoInstrumento.php" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  

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

            <

            <main class="container py-5">

                <h1 class="pt-5">Beneficiarios</h1>
                <p class="lead text-muted">En el corazón de los 21 museos, los 9 centros de investigación y el Zoológico Nacional del Smithsonian se encuentran las personas que sostienen nuestro compromiso de celebrar la historia de nuestra nación, nuestro arte y ciencia, nuestros inventos, y preservarlos para las generaciones futuras.</p>
                <hr class="my-5">

                <div class="container">
                    <h2>Apoye al su Jeffersonian</h2>                        
                    <p class="text-muted">James Smithson creía que el conocimiento beneficiaba a todos y que compartirlo libremente podía cambiar el mundo para mejor. Por eso dejó su legado a América con instrucciones explícitas de crear "un establecimiento para el aumento y difusión del conocimiento". Casi 175 años y generaciones de donantes más tarde, el Smithsonian es el complejo de museos, investigación y educación más grande del mundo.</p>
                    <p class="text-muted">Ese es el poder que puede tener un solo regalo. ¿Qué hará tu regalo?</p>
                    <a class="text-muted" href="https://www.si.edu/support/about">Obtenga más información sobre la notable historia de la filantropía en el Smithsonian »</a>
                    <break>

                    <div class="rtecenter d-grid gap-2 d-sm-flex justify-content-sm-center mb-5 py-5">
                        <a type="button" class="btn btn-warning btn-lg px-4 me-sm-3" href="http://go.si.edu/siedusupportfsj" target="_blank">Conviértase en miembro</a> 
                        <a type="button" class="btn btn-success btn-lg px-4" href="http://go.si.edu/siedusupportfsr" target="_blank">Renueve su membresía</a>
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