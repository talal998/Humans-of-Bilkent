<?php
extract($_POST);

if ( $_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST) ;

    require "db.php" ;


    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $sql = "INSERT INTO sublist (email) VALUES ('".$email."')";
    $result1 = mysqli_query($conn, $sql);
    var_dump($sql);
    header("Location: index.php") ;


    var_dump($result1);
}