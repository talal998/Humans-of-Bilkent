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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/fc/apple-touch-icon.png?v1">
    <link rel="icon" type="image/png" sizes="32x32" href="/fc/favicon-32x32.png?v1">
    <link rel="icon" type="image/png" sizes="16x16" href="/fc/favicon-16x16.png?v1">
    <link rel="manifest" href="/site.webmanifest">
    
    <link type="text/css" rel="stylesheet" href="style.css?v1.4">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168786688-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168786688-1');
    </script>


    <title>Humans of Bilkent</title>
</head>

<script>
        $(function(){
            $("#buttonH").hide();


            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })
            $("#mainTDiv").animate({opacity: '0'},10);

        if (($(window).width())> 600 ){

       

           

            $(".mainL").animate({top:'80vh', opacity: '0'}, 0);
            $(".mainL").animate({top:'35vh', opacity: '1'}, 1200);
            $(".mainL").animate({top:'35vh', opacity: '1'}, 800);
            $(".mainL").animate({top:'20vh', opacity: '0'}, 800);
            $(".mainL").animate({top:'15vh', 'font-size':'6vh'}, 0);
            $(".mainL").animate({ opacity: '1', top:'0vh'}, 800);
            $("#mainTDiv").animate({opacity: '0'},3200);
            $("#mainTDiv").animate({opacity: '1'},600);





        }
        //iPad
        else if (($(window).width()< 600)){
          

            $(".mainL").animate({top:'80vh', opacity: '0'}, 0);
            $(".mainL").animate({top:'35vh', opacity: '1'}, 1200);
            $(".mainL").animate({top:'35vh', opacity: '1'}, 800);
            $(".mainL").animate({top:'20vh', opacity: '0'}, 800);
            $(".mainL").animate({top:'10vh', 'font-size':'4vh'}, 10);
            $(".mainL").animate({ opacity: '1', top:'0vh'}, 400);
            $("#mainTDiv").animate({opacity: '0'},3210);
            $("#mainTDiv").animate({opacity: '1'},600);




        }


        


           //$("logo").css("height",$(window).height())
            //laptop
          
           

            //$(".mainL").css({'background':'white'}, 0);



            
                // $("late").css("margin","temp");
       

        })

    
    </script>

<body>

<div style="position:relative; ">

<div id="bg" >
    
       

    </div>
    <div  class="d-flex justify-content-center"  id="logoM">
            <h3 class="mainL"   >HUMANS OF BILKENT</h1>
        </table>

    </div>
    <div id="mainTDiv" class="table-responsive d-flex justify-content-center">
    <table id="mainTable" class="" >
    <tr>
      <td  scope="col"><a class="linkC" href="#stories">STORIES</a> </td>
      <td  scope="col"><a class="linkC" href="" onclick="window.open('http://humansofbilkent.com/story.php?id=1')">US</a> </td>
      <td  scope="col"><a class="linkC" href="" onclick="window.open('https://teespring.com/stores/humans-of-bilkent')" style="">SHOP</a> </td>
    </tr>
  
</table>
    </div>
</div>
   

<?php require "navbar.php";

?>
<h3 class="mainLBS text-center">LATEST STORIES</h3>

<?php require "stories.php" ?>

<div class="container">
        <div class="row">
            <div class="col text-center">
            <button id="buttonS" type="button" class="btn btn-outline-secondary">Show All</button>
            <button id="buttonH" type="button" class="btn btn-outline-secondary">Hide All</button>

            </div>
        </div>
    </div>
</div>


<?php require "footer.php" ?>

</div>
</body>
<script>
    $(document).ready(function(){

        $("#buttonS").click(function(){

            $("#stories").load("load.php");
            $(this).hide();
            $("#buttonH").show();

        });
        $("#buttonH").click(function(){

            $("#stories").load("stories.php");
            $(this).hide();
            $("#buttonS").show();
});
    })
</script>
</html>