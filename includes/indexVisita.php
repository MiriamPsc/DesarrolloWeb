<?php
   
    include_once 'user.php';
    include_once 'user_session.php';
    include_once 'db.php';
    
    
    $userSession = new UserSession();
    $user = new User();
    $db = new db();

    if(isset($_SESSION['user'])){

        if(isset($_POST['tipo'], $_POST['nombre'], $_POST['apellidoPaterno'], $_POST['apellidoMaterno'], 
        $_POST['insti'], $_POST['numeroPases'], $_POST['fecha'],  $_POST['horario'])){
            
            $tipo = $_POST['tipo'];
            $idUsuario = $userSession->getCurrentIdUser();
            $nombre = $_POST['nombre'];
            $apellidoP = $_POST['apellidoPaterno'];
            $apellidoM = $_POST['apellidoMaterno'];
            $institucion = $_POST['insti'];
            $numPases = $_POST['numeroPases'];
            $fecha = $_POST['fecha'];
            $horario = $_POST['horario'];

            

            $sql = "INSERT INTO visita(tipo, idVisitante, nombre, apellidoPaterno, apellidoMaterno, institucion, 
            numPase, fecha, horario, estatus, fechaCrea)
                            VALUES('$tipo', '$idUsuario', '$nombre', '$apellidoP', '$apellidoM', '$institucion', 
                            '$numPases', '$fecha', '$horario', 1, NOW())";

            $db->connect()->query($sql);
            
            header("location: visitas.php");

        }else{
            echo "no se ingresaron los datos";
        }

    }else{
        echo "no hay conexion";
    }
?>