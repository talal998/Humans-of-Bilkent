<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="style.css?v1.49">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/fc/apple-touch-icon.png?v1">
    <link rel="icon" type="image/png" sizes="32x32" href="/fc/favicon-32x32.png?v1">
    <link rel="icon" type="image/png" sizes="16x16" href="/fc/favicon-16x16.png?v1">
    <link rel="manifest" href="/site.webmanifest">
 <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168786688-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168786688-1');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOB | Story</title>
</head>
<body>
    
</body>
</html>

<?php 
require "navbar.php";
if ($_GET['id']){
    $id = $_GET['id'];
    $id = (int)$id;


    // $type = mysqli_real_escape_string($conn, $_GET['type']);

}

require "db.php";


$sql = "SELECT * FROM story where id = $id" ; 

$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
$result = $data; 
//$result = mysqli_fetch_all($result,MYSQLI_ASSOC);


session_start();
$_SESSION['related'] = $result[0]['tags'];
$_SESSION['id'] = $result[0]['id'];



$sql1 = "UPDATE story SET views = ".($result[0]['views']+1). " where id = $id" ; 
$result1 = mysqli_query($conn, $sql1);




// var_dump($id);



?>

<div>
    <table id="sTT">
        <tr id="storyTable">
            <td id="storyPicture" style="border 1px solid black"><img class="ysStory" src=<?=$result[0]['picture']  ?>  style="cursor: pointer; " alt=""></td>
            <td id="storyContent"><p><?=nl2br($result[0]['content'])?> <br><br><span id="hobIg" onclick="window.open('https://www.instagram.com/humansofbilkent')" style="cursor: pointer;">#humansofbilkent</span> </p>
</p></td>
        </tr>
    </table>
    <a class="mx-auto" style=" text-align: center;" id="view" ><p class="related">VIEWS: <?=$result[0]['views']?></p></a>
    <hr>
    <a class="mx-auto" style=" text-align: center;" id="related" ><p class="related">YOU MIGHT ALSO LIKE</p></a>
    

</div>

<?php

require "stories.php";
 require "footer.php" ;


?>