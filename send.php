<?php
require "db.php";

extract($_POST);
var_dump($_POST);

$name = $_POST['name'];
$mess = $_POST['message'];
$email = $_POST['email'];

// $name = mysqli_real_escape_string($conn, $name);
// $email = mysqli_real_escape_string($conn, $email);
// $mess = mysqli_real_escape_string($conn, $message);


$to = "contact@humansofbilkent.com";
$from = "talalahmad1998@icloud.com";
$subject = "Contact form submission";
$message = $name . " wrote the following:" . "\n\n" . $mess . " \n\nSent from: ".$email;


$headers = "From:" . $from;

//mail($to,$subject,$message,$headers);
var_dump($to);

var_dump($subject);

var_dump($message);

var_dump($headers);



// header("Location: index.php") ;


var_dump($message);
