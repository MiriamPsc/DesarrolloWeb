<?php

include_once 'db.php';

class User extends DB{

    private $nombre;
    private $username;
    private $idUsuario;

    public function userExists($user, $pass){

        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
            // $this->idUsario = $currentUser['idUsuario'];
        }
    }

    public function setIdUser($user){
        $query = $this->connect()->prepare('SELECT idUsuario FROM usuario WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentIdUser) {
            $this->idUsuario = $currentIdUser['idUsuario'];
        }
                return $this->idUsuario;

    }

    public function getIdUser(){
        return $this->idUsuario;
    }

    public function getNombre(){
        return $this->nombre;
    }

}


?>

