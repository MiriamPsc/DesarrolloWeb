<!DOCTYPE html>
<html lang="es">
    
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="js/bootstrap.bundle.min.js"> </script>
        <title>Instrumentos | Institución Jeffersonian</title>

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
                    <a href="inicio.php" class="navbar-brand nav-link d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"></svg>
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
                            
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Materiales usado en los laboratorios
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="reactivos.php">Reactivos</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="instrumento.php">Instrumentos</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active fixed-dark" aria-current="page" href="beneficiarios.php">Beneficiarios</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Visitas
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                        <li><a class="dropdown-item" href="#">Solicitar Visita</a></li>
                                        <li><a class="dropdown-item" href="#">Horario y Admisiones</a></li>
                                        <li><a class="dropdown-item" href="#">Consejos y Pautas</a></li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalSalir">Salir</a></li>
                                    </ul>
                                </li>  
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Perfil
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                        <li><a class="dropdown-item" href="#">Perfil Principal</a></li>
                                        <li><a class="dropdown-item" href="#">Solicitudes de Visitas</a></li>
                                        <hr class="dropdown-divider">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalSalir">Salir</a></li>
                                    </ul>
                                </li>   
                            </ul>

                            <div class="d-grid gap-2">
                                <a class="btn btn-warning" href="iniciosesion.php" role="button">Solicitar Visita</a>
                            </div>
                            
                            <div class="d-grid gap-2">
                            </div>
                            <div class="offcanvas" id="demo">
                            </div>
                        </div>
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
                            ¿Esrás segura de que desea cerrar sesión?
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Continuar</button>
                        </div>

                    </div>
                </div>
            </div>

            <main class="container py-5">

                <h1 class="pt-5">Instrumentos</h1>
                <p class="lead text-muted">Instrumentos usados en los distintos departamentos del instituto.</p>
                <hr class="my-5">

                <div class="album py-5 bg-light">
                    <div class="container">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                            <div class="card shadow-sm">
                                    <img src="images/instrumento/embudo de vidrio.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Embudo de vidrio">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                    </img>

                                    <div class="card-body">
                                        <b><p style="font-size:150%;">Embudo de Vidrio</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                <img src="images/instrumento/vaso precipitado.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Vaso precipitado">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                    </img>

                                    <div class="card-body">
                                    <b><p style="font-size:150%;">Vaso Precipitado</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                <img src="images/instrumento/matraz volumetrico.jfif" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Matraz volumétrico">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                    </img>

                                    <div class="card-body">
                                    <b><p style="font-size:150%;">Matraz Volumétrico</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="images/instrumento/frasco de reactivo.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Frasco de reactivo">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                    <div class="card-body">
                                    <b><p style="font-size:150%;">Frasco de Reactivo</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="images/instrumento/condensador de espiral.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Condensador de espiral">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                    <div class="card-body">
                                    <b><p style="font-size:150%;">Condensador de Espiral</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="images/instrumento/probeta milimetrada.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Probeta milimetrada">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                    <div class="card-body">
                                    <b><p style="font-size:150%;">Probeta Milimetrada</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="images/instrumento/pipeta.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Pipeta">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                    <div class="card-body">
                                    <b><p style="font-size:150%;">Pipeta</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="images/instrumento/mechero de bunsen.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Muchero de bunsen">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                    <div class="card-body">
                                    <b><p style="font-size:150%;">Mechero de Bunsen</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="images/instrumento/tubo de ensayo.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Tubo de ensayo">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" />
                                </img>

                                    <div class="card-body">
                                    <b><p style="font-size:150%;">Tubo de Ensayo</p></b>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
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
                        <li class="nav-item mb-2"><a href="materiales.php" class="nav-link p-0 text-muted">Materiales usados en los laboratorios</a></li>
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
                        <li class="nav-item mb-2"><a href="formVisita.php" class="nav-link p-0 text-muted">Solicitudes de Visitas</a></li>
                        <li class="nav-item mb-2"><a data-bs-toggle="modal" data-bs-target="#modalSalir" class="nav-link p-0 text-muted">Salir</a></li>
                    </ul>
                    </div>
                </footer>
                </div>
    </body>
</html>
