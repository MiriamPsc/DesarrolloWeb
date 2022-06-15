<?php

    include_once 'user.php';
    include_once 'user_session.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        // echo "Hay sesiónnnnnn";
        $user->setUser($userSession->getCurrentUser());
        $user->setIdUser($userSession->getCurrentIdUser());

        include_once 'inicio.php';
    }
    else if(isset($_POST['username']) && isset($_POST['password'])){    
        $userForm = $_POST['username'];
        $passForm = $_POST['password'];
    
        if($user->userExists($userForm, $passForm)){
            echo "usuario validado ";

            $userSession->setCurrentUser($userForm);
            $userSession->setCurrentIdUser($userForm);
            
            $user->setUser($userForm);
            $user->setIdUser($userForm);

            echo $_SESSION['idUser'];
            include_once 'inicio.php';           
        }else{
            // echo "nombre de usuario y/o password incorrecto";
            $errorLogin = "Nombre de usuario y/o password es incorrecto";
            include_once 'iniciosesion.php';
        }
    
    }else{
        // echo "Login";
        include_once 'iniciosesion.php';
    }
?>