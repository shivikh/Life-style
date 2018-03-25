<?php
require 'common.php';
if (!isset($_SESSION['email']))
    {
    header('location: index.php');
    }
?>

<html>
    <head>
        <title>Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <div>
            <?php
        require 'header.php';
        ?>
            <div class="container" style="margin-top: 150px;margin-bottom: 200px;width:30%">
                <h3>Change Password</h3>
                <div class="row">
                <form method="post" action="settings_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Old password" name="Old_password"><br>
                        <input type="password" class="form-control" placeholder="New password" name="New_password"><br>
                        <input type="password" class="form-control" placeholder="Retype New password" name="Retype_password"><br>
                        <button class="btn btn-primary">Change</button>
                    </div>
                </form>
                </div>
            </div>
          <?php
        require 'footer.php';
        ?>
        </div>
    </body>
</html>
