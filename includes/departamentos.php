<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="js/bootstrap.bundle.min.js"> </script>
        <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

        <title>Departamentos | Institución Jeffersonian</title>

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
          <h1 class="pt-5">Departamentos</h1>
          <p class="lead">Distintos departamentos trabajados en las diferentes instalaciones del Instituto Jeffersonian.</p>
          <hr class="my-5">

            <div class="row" data-masonry='{"percentPosition": true }'>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/antropologia.png" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Antropología">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>

                        <div class="card-body">
                            <h5 class="card-title">Antropología</h5>
                            <p class="card-text">Estudio de la humanidad, sus sociedades del presente y del pasado, así como las diversas culturas y formas de organización e interacción social que ha creado.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card p-3">
                        <figure class="p-3 mb-0">
                            <blockquote class="blockquote">
                                <p>En la conducta humana reina la libertad, hasta el punto de poder obrar sin ganas y en contra de las ganas.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0 text-muted"><cite title="Source Title">José Ramón Ayllón</cite></figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/restauracion.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Restauración y Conservación">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>

                        <div class="card-body">
                            <h5 class="card-title">Restauración y Conservación</h5>
                            <p class="card-text">Actividades profesionales dedicadas a fomentar la permanencia de aquellas manifestaciones culturales y artísticas, que son parte del patrimonio histórico de la humanidad.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card bg-warning text-center p-3">
                        <figure class="mb-0">
                            <blockquote class="blockquote">
                                <p>Proteger y rescatar obras artísticas responsablemente logra transmitir a generaciones futuras su significado histórico, artístico y social.</p>
                            </blockquote>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Historia del Arte</h5>
                            <p class="card-text">Relato de la evolución del arte a través del tiempo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/arte.jpg" class="bd-placeholder-img card-img-top" width="200" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Restauración y Conservación">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card p-3 text-end">
                        <figure class="mb-0">
                            <blockquote class="blockquote">
                                <p>El arte tiene la bonita costumbre de echar a perder todas las teorías artísticas.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0 text-muted"> <cite title="Source Title">Marcel Duchamp</cite></figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Si nos perfeccionamos en una sola cosa y la comprendemos bien, adquirimos por añadidura la comprensión y el conocimiento de muchas otras cosas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Historia de la Lingüística</h5>
                            <p class="card-text">Segmentación del objeto de la ciencia histórica para restringirse a la nación.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/nacional.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Historia Nacional">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>

                        <div class="card-body">
                            <h5 class="card-title">Historia Nacional</h5>
                            <p class="card-text">Actividades profesionales dedicadas a fomentar la permanencia de aquellas manifestaciones culturales y artísticas, que son parte del patrimonio histórico de la humanidad.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card bg-warning text-center p-3">
                        <figure class="mb-0">
                            <blockquote class="blockquote">
                                <p>Restaurar, conservar una obra de arte, es un acto de profundo respeto hacia el transcurso del tiempo.</p>
                            </blockquote>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/olivos.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Restauración y Conservación">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                      <div class="card-body">
                          <p class="card-text">Es verdad que en la ciencia no hay caminos reales; que la investigación se abre camino en la selva de los hechos, y que los científicos sobresalientes elaboran su propio estilo de pesquisas.</p>
                       </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/biologia.jfif" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Biología">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>

                        <div class="card-body">
                            <h5 class="card-title">Biología</h5>
                            <p class="card-text">Estudio de los seres vivos de manera integral, desde el nivel molecular y como parte de los ecosistemas; conociendo su estructura, función, desarrollo, evolución, sus interrelaciones y sus procesos hereditarios.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card p-3 text-end">
                        <figure class="mb-0">
                            <blockquote class="blockquote">
                                <p>La mente humana es un dispositivo para la supervivencia y la reproducción, y la razón es sólo una de sus diversas técnicas.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0 text-muted"> <cite title="Source Title">Edward Osborne Wilson</cite></figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card bg-warning text-center p-3">
                        <figure class="mb-0">
                            <blockquote class="blockquote">
                                <p>No hay más que una historia: La historia de la humanidad. Todas las historias nacionales no son más que capítulos de la mayor.</p>
                            </blockquote>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Cosmología</h5>
                            <p class="card-text">Ciencia que estudia la composición, evolución y propiedades del universo con el fin de entender su origen y evolución.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/paleontologia.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Pleontología">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>

                        <div class="card-body">
                            <h5 class="card-title">Paleontología</h5>
                            <p class="card-text">Ciencia natural que estudia e interpreta el pasado de la vida sobre la Tierra a través de los fósiles.​</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/universal.png" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Historia Universal">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>

                        <div class="card-body">
                            <h5 class="card-title">Historia Universal</h5>
                            <p class="card-text">Estudio y recopilación de hechos y situaciones que se han desarrollado en torno al contexto del ser humano, desde la aparición de la humanidad hasta nuestros días. </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/departamento/renacentismo.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
                             role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Renacentismo">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </img>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Historia de la Religión</h5>
                            <p class="card-text">Asignatura que aborda los fenómenos religiosos desde un punto de vista no confesional y una perspectiva tanto histórica como antropológica.</p>
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
