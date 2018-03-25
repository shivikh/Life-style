<?php
function check_if_added_cart($item_id)
{
    $con=mysqli_connect("localhost","root","","store");
    $var=$_SESSION['email'];
    $select_query1="select id from users where email='$var'";
    $select_query1_result=mysqli_query($con,$select_query1);
    $user1_id=mysqli_fetch_array($select_query1_result);
    $user_id=$user1_id['id'];
    $select_query="select * from users_items where item_id='$item_id' and user_id='$user_id' and status='Added to cart'";
    $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
    if(mysqli_num_rows($select_query_result)>=1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
?>