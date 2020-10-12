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
    <link type="text/css" rel="stylesheet" href="style.css?v1.39">
    <link rel="apple-touch-icon" sizes="180x180" href="/fc/apple-touch-icon.png?v1">
    <link rel="icon" type="image/png" sizes="32x32" href="/fc/favicon-32x32.png?v1">
    <link rel="icon" type="image/png" sizes="16x16" href="/fc/favicon-16x16.png?v1">
    <link rel="manifest" href="/site.webmanifest">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168786688-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168786688-1');
</script>

    <title>HOB | Admin</title>
</head>
<body>
<?php 
require "navbar.php";

if ($_GET['id']){
    $id = $_GET['id'];
    $id = (int)$id;
}

require "db.php";

?>
<div style="width:90%; padding-left:10%; padding-top:2vh">

<form action="add.php" method="post" enctype="multipart/form-data">
    <div class="form-group" >
        <label for="formGroupExampleInput">Story</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="story"></textarea>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Tags</label>
        <input class="form-control" type="text" placeholder="Story Tags" name="tags">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">ID</label>
        <input class="form-control" type="int" placeholder="ID" name="id">
    </div>
    <div class="uploadBtn">
    <input type="file"  id="customFile" name="fileToUpload">
    <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" >
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
<?php require "footer.php" ?>

</body>
</html>


