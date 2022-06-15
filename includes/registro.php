<?php
   
    include_once 'db.php';

    $db = new db();


        if(isset($_POST['nombre'], $_POST['apellidoPaterno'], 
        $_POST['apellidoMaterno'], $_POST['username'], 
        $_POST['password'], $_POST['email'])){
            
            $nombre = $_POST['nombre'];
            $apellidoP = $_POST['apellidoPaterno'];
            $apellidoM = $_POST['apellidoMaterno'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            
            $sql = "INSERT INTO usuario(nombre, apellidoPaterno, apellidoMaterno, 
                                username, password, correo, fechaCrea)
                        VALUES('$nombre', '$apellidoP', '$apellidoM', 
                                '$username', '$password', '$email', NOW())";

            $db->connect()->query($sql);
                        
            header("location: inicio.php");
            mysqli_close($db);

        }else{
            echo"error";
        } 

    
    
?>