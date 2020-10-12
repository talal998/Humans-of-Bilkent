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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/fc/apple-touch-icon.png?v1.1">
    <link rel="icon" type="image/png" sizes="32x32" href="/fc/favicon-32x32.png?v1.1">
    <link rel="icon" type="image/png" sizes="16x16" href="/fc/favicon-16x16.png?v1.1">
    <link rel="manifest" href="/site.webmanifest">
    <link type="text/css" rel="stylesheet" href="../style.css?v1.39">
    <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168786688-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168786688-1');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOB | Apply</title>
    <script>
        $(function () {

            $(".photo").hide(100);
            $(".writer").hide(100);
            $(".interview").hide(100);
            $(".org").hide(100);
            $("#submit").hide(100);



            $("#photo").click(function(){
            $(".photo").show(100);
            $(".writer").hide(100);
            $(".interview").hide(100);
            $(".org").hide(100);

            $("#submit").show(100);
            $(".photo").append(" <input type='hidden' id='deptt' name='dept' value='Photographer/Media'>");


            });

            $("#writer").click(function(){
            $(".photo").hide(100);
            $(".writer").show(100);
            $(".interview").hide(100);
            $(".org").hide(100);

            $("#submit").show(100);
            $(".photo").append(" <input type='hidden' id='deptt' name='dept' value='Writing'>");


            });
            $("#interview").click(function(){
            $(".photo").hide(100);
            $(".writer").hide(100);
            $(".interview").show(100);
            $(".org").hide(100);

            $("#submit").show(100);
            $(".photo").append(" <input type='hidden' id='deptt' name='dept' value='Interviewing'>");


            });
            $("#org").click(function(){
            $(".photo").hide(100);
            $(".writer").hide(100);
            $(".interview").hide(100);
            $(".org").show(100);

            $("#submit").show(100);
            $(".photo").append(" <input type='hidden' id='deptt' name='dept' value='Org'>");


            });

        window.verifyRecaptchaCallback = function (response) {
            $('input[data-recaptcha]').val(response).trigger('change')
        }

        window.expiredRecaptchaCallback = function () {
            $('input[data-recaptcha]').val("").trigger('change')
        }

        $('#contact-form').validator();

        $('#contact-form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var url = "contact.php";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(this).serialize(),
                    success: function (data) {
                        var messageAlert = 'alert-' + data.type;
                        var messageText = data.message;

                        var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                        if (messageAlert && messageText) {
                            $('#contact-form').find('.messages').html(alertBox);
                            $('#contact-form')[0].reset();
                            grecaptcha.reset();
                        }
                    }
                });
                return false;
            }
        })
        
        
        
        });
    </script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top" >
  <a class="navbar-brand mx-auto" style=" padding-bottom: 0vh;border:0px solid black" href="../"><h3 class="mainLB text-center">HUMANS OF BILKENT</h3><br><p class="sloganLB">EVERY BILKENTLI IS INTERESTING</p></a>
</nav>
<?php 



require "../db.php";

?>
<div style="width:90%; padding-left:10%; padding-top:2vh; padding-bottom:2vh">

<form action="applyhob.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
                <label for="formGroupExampleInput">Full Name:</label>
                <input class="form-control" type="text"  name="name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
         <div class="form-group" >
            <label for="formGroupExampleInput">Briefly explain, what motivates you to apply for Humans of Bilkent? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="motivation" required></textarea>
        </div>
       
        <p>Which department of humans of Humans of Bilkent would you like to join?</br></p>


    <div   class="row align-items-center justify-content-center form-group">
        
        <button style="margin: 1vh; " type="button" class="btn btn-light" id="photo" name="deptp" value="photo"> Photographer
        </button>
        <button style="margin: 1vh" type="button" class="btn btn-light" id="writer" name="deptw" value="writer"> Writer        

        </button>
        <button style="margin: 1vh" type="button" class="btn btn-light" id="interview" name="depti" value="interview"> Interviewer
        </button>
        <button style="margin: 1vh" type="button" class="btn btn-light" id="org" name="depto" value="org"> Organisation
        </button>
    
    </div>
    


    <div class="photo">

    <p style="margin-bottom:0vh;">Team: Photography/Media</p>

    
    <div class="form-group" >
            <label for="formGroupExampleInput">Do you have any past experience in the department selected above, please share your work if you have? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pExp" ></textarea>
    </div>



    <div class="form-group" >
            <label for="formGroupExampleInput"> Anything else that you would like to add? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="pAdd" ></textarea>
    </div>
        
        


    </div>

    <div class="writer">

    <p style="margin-bottom:0vh;">Team: Writer</p>


    <div class="form-group" >
            <label for="formGroupExampleInput">Do you have any past experience in the department selected above? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="wExp" ></textarea>
    </div>


    <div class="form-group" >
            <label for="formGroupExampleInput"> Anything else that you would like to add? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="wAdd" ></textarea>
    </div>
        
        


    </div>

    <div class="interview">
    <p style="margin-bottom:0vh;">Team: Interviewer</p>

    
    <div class="form-group" >
            <label for="formGroupExampleInput">Do you have any past experience in the department selected above? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="iExp" ></textarea>
    </div>


    <div class="form-group" >
            <label for="formGroupExampleInput"> Anything else that you would like to add? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="iAdd" ></textarea>
    </div>
        
        


    </div>

    <div class="org">
    <p style="margin-bottom:0vh;">Team: Organisation</p>

    
    <div class="form-group" >
            <label for="formGroupExampleInput">Do you have any past experience in the department selected above? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="oExp" ></textarea>
    </div>


    <div class="form-group" >
            <label for="formGroupExampleInput"> Anything else that you would like to add? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="oAdd" ></textarea>
    </div>
        
        


    </div>
    <div id="submit">
    <p style="margin-bottom:0vh;">I wish to receive newsletter emails from Humans of Bilkent.</p>


<div style="margin-top:0vh; padding-left:3vh;" >

<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" value="yes" checked>
  <label class="custom-control-label" for="defaultGroupExample1">Yes</label>
</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" value="no">
  <label class="custom-control-label" for="defaultGroupExample2">No</label>
</div>

    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
    </div>

</div>
   
    <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Le4HAEVAAAAAOHHarDUlzk7PjgOf3arT0Og-M51" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
            <div class="help-block with-errors"></div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
    

</div>
<?php require "footer.php" ?>

</body>
</html>


