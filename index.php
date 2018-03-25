<?php
require 'common.php';
if(isset($_SESSION['email']))
    {
    header('location: product.php');
    }
?>
<html>
    <head>
        <title>project 2</title>
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
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h1>We Sell Lifestyle</h1>
                    <p>Flat 40% off on premium brands</p>
                     <a href="product.php"><button class="btn-danger btn-lg active">Shop Now</button></a>    
                </div>
                </center>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>