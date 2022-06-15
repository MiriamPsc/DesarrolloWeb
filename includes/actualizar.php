<?php
   
    include_once 'user.php';
    include_once 'user_session.php';
    include_once 'db.php';
    
    
    $userSession = new UserSession();
    $user = new User();
    $db = new db();

    if(isset($_SESSION['user'])){

        if(isset($_POST['username'],$_POST['nombre'], $_POST['apellidoPaterno'], 
        $_POST['apellidoMaterno'], $_POST['email'],  $_POST['newpass'])){
            
            $username = $_POST['username'];
            $nombre = $_POST['nombre'];
            $apellidoP = $_POST['apellidoPaterno'];
            $apellidoM = $_POST['apellidoMaterno'];
            $email = $_POST['insti'];
            $newpass = $_POST['newpass'];
            $idUser = $user->getIdUser();
      
            $sql = "UPDATE usuario SET username = '$username', nombre = '$nombre', 
                    apellidoPaterno = '$apellidoP', apellidoMaterno = '$apellidoM', 
                    correo = '$email', password = '$newpass' WHERE idUsuario = '$idUser'";

            $db->connect()->query($sql);
            
            header("location: perfil.php");

        }else{
            echo "no se actualizaron los datos";
        }

    }else{
        echo "no hay conexion";
    }
?>