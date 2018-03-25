<?php
$item_id=$_GET['id'];
require 'common.php';
$var=$_SESSION['email'];
$select_query="select id from users where email='$var'";
$select_query_result=mysqli_query($con,$select_query);
$user1_id=mysqli_fetch_array($select_query_result);
$user_id=$user1_id['id'];
$user_info="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$user_info_result=mysqli_query($con,$user_info) or die(mysqli_error($user_info));
header('location:product.php');
?>
