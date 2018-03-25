<?php
require 'common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=$_POST['password'];
md5($password);
$select_query="select email,id from users where email='$email' and password='$password'";
$select_query_result=mysqli_query($con,$select_query);
if(mysqli_num_rows($select_query_result)==0)
{
    $_SESSION['a']=1;
    echo "Not Registered!";
}
else
{
    mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$email;
    $_SESSION['id']=mysqli_insert_id($con);
    header ('location:product.php');
}

?>