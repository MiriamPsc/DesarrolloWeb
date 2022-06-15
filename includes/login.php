<?php

require 'db.php';
session_start();

    $query = 'SELECT * FROM usuario WHERE username = :user AND password = :pass';
    $consulta = mysqli_query($db->connect(), $query);
    $array
        
?>