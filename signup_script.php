<?php
require 'common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$number=mysqli_real_escape_string($con,$_POST['number']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email))
{
    echo "incorrect email";
}
$select_query="select email from users where email='$email'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)>0)
{
    echo "Already registered email";
    header('location:login.php');
}
else
{
 $registration_info="insert into users(name,email,password,contact,city,address)values('$name','$email','$password','$number','$city','$address')";
 $user_registration_submit=mysqli_query($con,$registration_info)or die(mysqli_error($con));
 echo "successfully account created";
 $_SESSION['email']=$email;
 $_SESSION[id]=mysqli_insert_id($con);
 header('location:product.php');
}
?>