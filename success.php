<?php
require 'common.php';
if(!isset($_SESSION['email']))
    {
    header('location: index.php');
    }
$user_email=$_SESSION['email'];
$select_query="select id from users where email='$user_email'";
$select_query_result=mysqli_query($con,$select_query);
$user1_id=mysqli_fetch_array($select_query_result);
$user_id=$user1_id['id'];
$var3="update users_items set status='confirmed' where user_id='$user_id'";
 $select1_query_result=mysqli_query($con,$var3);
?>

<html>
    <head>
        <title>success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <div>
            <h3>Your order is confirmed. Thank you for shopping with us.<a href="product.php"> Click here</a> to purchase any other item.</h3>
        </div>
    </body>
</html>
