<?php
require 'common.php';
if(!isset($_SESSION['email']))
    {
    header('location: index.php');
    }
    $user_email=$_SESSION['email'];
    $old_pass= mysqli_real_escape_string($con,$_POST['Old_password']);
    $new_pass= mysqli_real_escape_string($con,$_POST['New_password']);
    $re_pass= mysqli_real_escape_string($con,$_POST['Retype_password']);
    if(strlen($new_pass)==strlen($re_pass))
    {
        $select_query="select password from users where email='$user_email'";
        $select_query_result=mysqli_query($con,$select_query);
        $query_result=mysqli_fetch_array($select_query_result);
        if($query_result['password']==$old_pass)
        {
            $var4="update users set password='$new_pass' where email='$user_email'";
            $var4_result=mysqli_query($con,$var4);
            echo 'password change successfully!';
        }
       else {
           $error='wrong password';
            echo $error;
             header('location:product.php');
           }
    }
    else
    {
        echo 'password mis-match';
    }
?>
