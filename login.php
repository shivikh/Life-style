<?php
require 'common.php';
if (isset($_SESSION['email']))
    {
    header('location: product.php');
    }
?>

<html>
    <head>
        <title>Login</title>
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
        if($_SESSION['a'])
        {
            echo 'not register';
        }
        ?>
        <div class="container" id="frm">
        <div class="row">    
        <div class="panel-primary">
            <div class="panel-heading">
                <p class="text-warning">Login To Make A Purchase</p>
                <form method="post" action="login_submit.php">
                    <div class="form-group">
                        <label for="Email">Email Address</label>
                        <input type="email" class="form-control" placeholder="Email-ID" name="email"><br>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password"><br>
                        <button class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <a href="signup.php">Don't Have an Account?Register</a>
            </div>
        </div>
             </div>
        </div>
     <?php
        require 'footer.php';
        ?>  
    </body>
</html>
