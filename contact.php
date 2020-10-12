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
    <link type="text/css" rel="stylesheet" href="style.css?v1.39">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168786688-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168786688-1');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOB | Contact</title>
    <script>
        $(function () {

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
<?php 
require "navbar.php";



require "db.php";

?>
<div style="width:90%; padding-left:10%; padding-top:2vh; padding-bottom:2vh">

<form action="send.php" method="post" enctype="multipart/form-data">
<div class="form-group">
        <label for="formGroupExampleInput">Name:</label>
        <input class="form-control" type="text"  name="name" required>
    </div>
    <div class="form-group" >
        <label for="formGroupExampleInput">Message:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="message" required></textarea>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Le4HAEVAAAAAOHHarDUlzk7PjgOf3arT0Og-M51" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
<?php require "footer.php" ?>

</body>
</html>


