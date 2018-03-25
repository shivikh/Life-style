<?php
$con=mysqli_connect("localhost","root","","store");
session_start();
$item_id=$_GET['id'];
$user_email=$_SESSION['email'];
$select_query="select id from users where email='$user_email'";
$select_query_result=mysqli_query($con,$select_query);
$user1_id=mysqli_fetch_array($select_query_result);
$user_id=$user1_id['id'];
$delete_query="delete from users_items where user_id='$user_id' and item_id='$item_id'";
$delete_query_result=mysqli_query($con,$delete_query);
header('location:cart.php');
?>
