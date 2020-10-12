<?php

// $dsn = "mysql:host=localhost;dbname=codes;charset=utf8mb4" ;
 $dbServername = "localhost";
 $user = "talalahmad" ; // "root/std"
 $pass = "ca31f724cf" ; // "", "root"
 $dbname = "humansofbilkent";
 $conn = mysqli_connect($dbServername, $user, $pass, $dbname);
 if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}


