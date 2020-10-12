<?php
require "../db.php";

extract($_POST);
var_dump($_POST);

$name = $_POST['name'];
$moti = $_POST['motivation'];
$email = $_POST['email'];
$department = $_POST['dept'];
$departmentExp = "";
$departmentAdd = "";
$emailPref = $_POST['groupOfDefaultRadios'];
$body = "";


if ($department == 'Photographer/Media') {
    $department = "Photographer/Media";
    $departmentExp = $_POST['pExp'];
    $departmentAdd = $_POST['pAdd'];

} elseif ($department == 'Writing') {
    $department = "Writer";
    $departmentExp = $_POST['wExp'];
    $departmentAdd = $_POST['wAdd'];
} elseif ($department == 'Interviewing') {
    $department = "Interviewer";
    $departmentExp = $_POST['iExp'];
    $departmentAdd = $_POST['iAdd'];
} elseif ($department == 'Org') {
    $department = "Organisation";
    $departmentExp = $_POST['oExp'];
    $departmentAdd = $_POST['oAdd'];
}
; 
$body ="Name: " . $name . " \n\nEmail: " . $email . "\n\nDeptartment: " . $department. "\n\nMotivation Letter: " .  $moti . "\n\nExperience: " . $departmentExp . "\n\nAdditional Notes: " . $departmentAdd; 

$subject = "New HOB Application (". $department.")";

$from = "talalahmad1998@icloud.com";
$headers = "From:" . $from;
$to = "contact@humansofbilkent.com";

 mail($to,$subject,$body,$headers);


// var_dump($to);

// var_dump($subject);

// var_dump($body);

// var_dump($headers);
if ($emailPref == 'yes') {

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $sql = "INSERT INTO sublist (email) VALUES ('".$email."')";
    $result1 = mysqli_query($conn, $sql);
    var_dump($sql);


    var_dump($result1);

}
 header("Location: success.php") ;



?>