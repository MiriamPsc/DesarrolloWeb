<!DOCTYPE html>
<html lang="es">
    
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="js/bootstrap.bundle.min.js"> </script>
        <title>Inicio | Institución Jeffersonian</title>

        <link rel="canonical" href="http://localhost/geniuslab/tipoInstrumento.php" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" 
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" 
        crossorigin="anonymous" async></script>
  

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

            
            </div>

        <main class="container pt-5">

          <div class="contenedor text-center">
            <h1 class="display-4 fst-italic py-5" >Institución Jeffersonian</h1>
            <img class="bd-placeholder-img" style="background-color: rgb #80bfff; color: black;" src="images/inicio/header.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" ></img>
          </div>

          <div class="row mb-2">
            <div class="col-md-6 py-5">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success">Biología</strong>
                    <h3 class="mb-0">Pandas Gigantes</h3>
                    <p class="card-text mb-auto">Celebración de los 50 años de los pandas gigantes.</p>
                    <a href="#" class="stretched-link">Seguir leyendo...</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" src="images/inicio/zoologico.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
                </div>
              </div>
            </div>
            <div class="col-md-6 py-5">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-warning">Arte</strong>
                    <h3 class="mb-0">Impresionismo para el siglo XXI</h3>
                    <p class="mb-auto">Un movimiento que sigue vigente en la actualidad.</p>
                    <a href="#" class="stretched-link">Seguir leyendo...</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" src="images/inicio/arte.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-5">
            <div class="col-md-8">
              <article class="pb-4 mb-3 fst-italic blog-post">
              <h2 class="blog-post-title">Bienvenida</h2>
              <p class=" pb-4 fst-italic border-bottom">La Institución Jeffersonian es el complejo de museos, educación e investigación más grande del mundo. Somos una comunidad de aprendizaje y un abridor de puertas. Únase a nosotros en un viaje de descubrimiento. Solicite una visita a alguna de nuestras instituciones y aprenda sobre ciencia, historia y arte.</p>
              </article>

              <article class="blog-post">
                <h2 class="blog-post-title">Sobre el Jeffersonian</h2>
                <p>Con 21 museos y el Zoológico Nacional, la Institución Jeffersonian es el complejo de museos, educación e investigación más grande del mundo, dando forma al futuro preservando el patrimonio, descubriendo nuevos conocimientos y compartiendo nuestros recursos con el mundo.</p>

                <p>Fue fundada en 1846 con fondos del inglés James Jefferson (1765-1829) según sus deseos</p>
                <blockquote class="blockquote">
                  <p>“Bajo el nombre de Institución Jeffersonian, un establecimiento para el aumento y difusión del conocimiento”</p>
                </blockquote>
                <p>Continuamos honrando esta misión y lo invitamos a unirse a nosotros en nuestra búsqueda.</p>

                <div class="pt-5container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row">
                  <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="images/inicio/revista.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>

                    <h2>Revista</h2>
                    <p >La revista <i>Jeffersoniana</i> coloca una lente Jeffersoniana en el mundo.</p>
                    <p><a class="btn btn-warning" href="https://www.smithsonianmag.com/?utm_source=siedu&utm_medium=referral&utm_campaign=home" target="_blank">Ir &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    
                    <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="images/inicio/streaming.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>

                    <h2>Streaming</h2>
                    <p>Programación galardonada que explora la ciencia, la historia de la naturaleza y la cultura pop.</p>
                    <p><a class="btn btn-warning" href="https://www.smithsonianchannel.com/?utm_medium=referral&utm_campaign=home" target="_blank">Ir &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="images/inicio/store.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>

                    <h2>Tienda</h2>
                    <p>Su compra ayuda a Jeffersonian a brindar emocionantes experiencias de aprendizaje a todos.</p>
                    <p><a class="btn btn-warning" href="https://www.si.edu/shop" target="_blank">Ir &raquo;</a></p>

                  </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->

                <div class="row align-items-md-stretch">
                  <div class="col-md-6">
                    <div class="h-70 p-5 bg-light border rounded-3">
                      <h2>Instituciones</h2>
                      <p>Conoce los distintos museos e institutos de investigación que conforman el complejo.</p>
                      <a class="btn btn-outline-warning" type="button" href="instituciones.php">Ver</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="h-70 p-5 text-black bg-warning rounded-3">
                      <h2>Departamentos</h2>
                      <p>Conoce los departamentos que se estudian y trabajan en las distintas instituciones.</p>
                      <a class="btn btn-outline-dark" type="button" href="departamentos.php">Ver</a>
                    </div>
                  </div>
                  
                </div>
              </article>
            </div>

            <div class="col-md-4">
              <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                  <h4 class="fst-italic pt-3">Visítanos</h4>
                  <p class="mb-0">Consulta nuestros <a href="horarioAdmision.php">horarios e información de admisión</a> y protocolos de seguridad para planificar tu visita.</p><br>
                  <p>Se requieren pases de entrada programada</p>
                </div>

                <div class="d-grid gap-2">
                  <a class="btn btn-success" href="iniciosesion.php" role="button">Iniciar Sesión</a>
                </div>
                <br>
                <div class="d-grid gap-2">
                  <a class="btn btn-warning" href="formVisita.php" role="button">Solicitar Visita</a>
                </div>
              </div>
            </div>
          </div>

          

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




