<?php
require 'common.php';
if (isset($_SESSION['email']))
    {
    header('location: product.php');
    }

?>

<html>
    <head>
        <title>signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
          <?php
        require 'header.php';
        ?>
        <div class="container" id="sgfrm" >
            <h2>Sign Up</h2>
            <div class="row">
                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name"><br>
                        <input type="email" class="form-control" placeholder="Email" name="email"><br>
                        <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}"><br>
                        <input type="number" class="form-control" placeholder="Contact no" name="number"><br>
                        <input type="text" class="form-control" placeholder="City" name="city"><br>
                        <input type="text" class="form-control" placeholder="Address" name="address"><br>
                        <button class="btn btn-primary">Submit</button><br>
                    </div>
                </form>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>
