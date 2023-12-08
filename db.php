<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "data_crud";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("no connexion: ".mysqli_connect_error);
    }
    // echo "connexion done";
?>