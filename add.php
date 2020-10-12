<?php
    extract($_POST) ;
if ( $_SERVER["REQUEST_METHOD"] == "POST") {

     require "db.php" ;


     $id = (int)$_POST['id'];
     $story =  $_POST['story'];
     $tags = $_POST['tags'];
     $passw =  $_POST['pass'];

     if ($passw === "ca31f724cf@@"){


            //if (!isset($_SESSION)) { session_start();}
        $inipath = php_ini_loaded_file();
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $fname = "humansofbilkent". $_POST['id'];
        $ext = explode('.',($_FILES["fileToUpload"]["name"]));
        $ext =  "." .end($ext);



        if ($ext != ".jpg" && $ext != ".png" && $ext != ".jpeg" && $ext != ".gif" ) {
            var_dump($target_file);

        }
        else {
            $target_dir = "img/story/";
            $target_file = $target_dir ."humanofbilkent". $id. $ext ;
            $fileTemp = $_FILES["fileToUpload"]["tmp_name"];
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo( basename($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION)));


            $image=$fileToUpload; // used to store the filename in a variable

            $bo = move_uploaded_file ( $fileTemp,  $target_file );

        }

        $sql= "INSERT INTO `story` (`id`, `content`, `picture`, `tags`, `views`, `created`) VALUES (NULL, '$story', '$target_file', '$tags', '7', CURRENT_TIMESTAMP)";
        $result1 = mysqli_query($conn, $sql);
        var_dump($sql);
        header("Location: index.php") ;

         
    }




   


    
}

?>