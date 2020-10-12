<?php
//var_dump($_SERVER);
//require db.php;
$ref=$_SERVER['HTTP_REFERER'];
$agent=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['REMOTE_ADDR'];
$host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$tracking_page_name= $_SERVER['SCRIPT_NAME'];

$strSQL = "INSERT INTO track (ref, agent, ip, tracking_page_name, domain)  VALUES('$ref','$agent','$ip','$tracking_page_name','$host_name')"; 
$result = mysqli_query($conn, $strSQL);

var_dump($strSQL);

?>
