<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="js/bootstrap.bundle.min.js"> </script>
        <title>Información del Perfil | Institución Jeffersonian</title>

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
                <div class="container py-5">

                    <div class="row">
                        <div class="col-md-3 ">
                            
                            <div class="list-group ">
                                <a href="perfil.php" class="list-group-item list-group-item-action text-dark bg-warning" style="--bs-bg-opacity: .5;">Información de la cuenta</a>
                                <a href="visitas.php" class="list-group-item list-group-item-action">Visitas</a>
                                <a href="ajustes.php" class="list-group-item list-group-item-action">Ajustes</a><br>
                                <a class="btn btn-warning" href="formVisita.php" role="button">Solicitar Visita</a><br>
                                <a class="btn btn-danger" href="logout.php" role="button">Cerrar Sesión</a>
                            </div> 
                        </div>
                                                    

                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Perfil Principal</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="username" class="col-4 col-form-label">Nombre de usuario</label> 
                                                    <div class="col-8">
                                                        <input id="username" name="username" placeholder="Nombre de usuario" class="form-control here" required="required" type="text" readonly>
                                                    </div>
                                                </div><br>
                                                <div class="form-group row">
                                                    <label for="name" class="col-4 col-form-label">Nombres</label> 
                                                    <div class="col-8">
                                                        <input id="nombre" name="nombre" placeholder="Nombres" class="form-control here" type="text" readonly>
                                                    </div>
                                                </div><br>
                                                <div class="form-group row">
                                                    <label for="lastname" class="col-4 col-form-label">Apellido Paterno</label> 
                                                    <div class="col-8">
                                                        <input id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido Paterno" class="form-control here" type="text" readonly>
                                                    </div>
                                                </div><br>
                                                <div class="form-group row">
                                                    <label for="lastname" class="col-4 col-form-label">Apellido Materno</label> 
                                                    <div class="col-8">
                                                        <input id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido Materno" class="form-control here" type="text" readonly>
                                                    </div>
                                                </div><br>
                                                <div class="form-group row">
                                                    <label for="email" class="col-4 col-form-label">Correo Electrónico</label> 
                                                    <div class="col-8">
                                                        <input id="email" name="email" placeholder="Correo Electrónico" class="form-control here" required="required" type="text" readonly>
                                                    </div>
                                                </div><br>
                                                <div class="form-group row">
                                                    <div class="offset-4 col-8">
                                                        <a href="ajustes.php" class="btn btn-warning">Editar información</a>
                                                    </div>
                                                </div> 
                                            </form>
                                        </div>
                                    </div>
		                        </div>
		                    </div>
                            <br>
		                </div>
	                </div>
                </div>
            </main>

            
    </body>
</html>