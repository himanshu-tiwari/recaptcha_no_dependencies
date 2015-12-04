<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Sign up</title>

        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <style>
             .g-recaptcha{

             	margin-bottom: 10px;
             }
        </style>
    </head>
    <body>
        <div class = "container">
           <div class = "row">
              <div class = "col-lg-6">
                 <h3>Sign up</h3>
                 <hr>
                 <form action = "signup.php" method = "post" autocomplete = "off">
                     <div class = "form-group">
                     <label for = "email">Email address</label>
                     <input type = "email" name = "email" class = "form-control" id = "email" placeholder = "you@domain.com">
                     </div>

                     <script src='https://www.google.com/recaptcha/api.js'></script>

                     <div class="g-recaptcha" data-sitekey="6LeLaxITAAAAAEGyxE2DqfZIgpE3QrnQDQI5wAk1"></div>

                     <input type = "submit" value = "Sign up" class = "btn btn-primary">
                 </form>
              </div>
           </div>
        </div>
    <body>
</html>