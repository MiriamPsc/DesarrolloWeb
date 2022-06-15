<?php

    class UserSession{

        public function __construct(){
            session_start();
        }

        public function setCurrentUser($user){
            $_SESSION['user'] = $user;
        }

        public function getCurrentUser(){
            return $_SESSION['user'];
        }

        public function setCurrentIdUser($idUser){
            $_SESSION['idUser'] = $idUser;
        }

        public function getCurrentIdUser(){
            return $_SESSION['idUser'];
        }

        public function closeSession(){
            session_unset();
            session_destroy();
        }
    }

?>