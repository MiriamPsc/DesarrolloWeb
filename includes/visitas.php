<?php 

    
    $conexion=mysqli_connect('localhost','root','Bangtan.198913','institutojeffersonian');

 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="js/bootstrap.bundle.min.js"> </script>
        <title>Visitas | Institución Jeffersonian</title>

        <link rel="canonical" href="http://localhost/geniuslab/instituciones.php" />

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="images/logo.png" sizes="180x180" />
        <link rel="icon" href="images/logo.png" sizes="32x32" type="image/png" />
        <link rel="icon" href="images/logo.png" sizes="16x16" type="image/png" />
        <link rel="manifest" href="manifest.json"/>
        <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#7952b3" />
        <link rel="icon" href="../images/logo.png"/>
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
                                <a href="perfil.php" class="list-group-item list-group-item-action">Información de la cuenta</a>
                                <a href="#" class="list-group-item list-group-item-action text-dark bg-warning" style="--bs-bg-opacity: .5;">Visitas</a>
                                <a href="ajustes.php" class="list-group-item list-group-item-action">Ajustes</a><br>
                                <a class="btn btn-warning" href="formVisita.php" role="button">Solicitar Visita</a><br>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalSalir" class="nav-link p-0 text-muted">Cerrar Sesión</a>
                            </div> 
                        </div>
                                                    

                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Visitas</h4>
                                                <hr>
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">tipo</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Apellidos</th>
                                                                <th scope="col">Institución</th>
                                                                <th scope="col">Pases</th>
                                                                <th scope="col">Fecha</th>
                                                                <th scope="col">Horario</th>
                                                                <th scope="col">Fecha y Hora de Solicitud</th>
                                                            </tr>
                            
                                                            <?php 

                                                                include_once 'user.php';
                                                                include_once 'user_session.php';

                                                                $userSession = new UserSession();
                                                                $user = new User();
                                                                $idUser = $user->getIdUser();
                                                            
                                                                $sql="SELECT * FROM visita WHERE idVisitante = '$idUser'";
                                                                $result=mysqli_query($conexion,$sql);

                                                                while($mostrar=mysqli_fetch_array($result)){
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $mostrar['tipo'] ?></td>
                                                                        <td><?php echo $mostrar['nombre'] ?></td>
                                                                        <td><?php echo $mostrar['apellidoPaterno'] . " " . $mostrar ['apellidoMaterno'] ?></td>
                                                                        <td><?php echo $mostrar['institucion'] ?></td>
                                                                        <td><?php echo $mostrar['pases'] ?></td>
                                                                        <td><?php echo $mostrar['fecha'] ?></td>
                                                                        <td><?php echo $mostrar['horario'] ?></td>
                                                                        <td><?php echo $mostrar['fechaCrea'] ?></td>
                                                                    </tr>
                                                                <?php
                                                                } 
                                                            ?>
                                                        <thead>
                                                    </table>
                                                </div>
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