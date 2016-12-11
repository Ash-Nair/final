<?php
    //Database Connection to Localhost
    $conn = mysqli_connect("localhost", "root", "", "users");
    //execution if connection to server was failed
    if(!$conn){
        die("Connection aborted: ".mysqli_connect_error());
    }



?>