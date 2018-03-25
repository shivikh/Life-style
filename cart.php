<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
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
            <div class="container" style="margin-top: 100px;margin-bottom: 230px; width:50%">
                <table class="table table-bordered" style="margin-top: 80px;">
                        <tbody>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            <?php
                            $user_email=$_SESSION['email'];
                            $check_query="select id from users where email='$user_email'";
                            $result_query=mysqli_query($con,$check_query);
                            $user1_id=mysqli_fetch_array($result_query);
                            $user_id=$user1_id['id'];
                            $select_item_query="SELECT * FROM items INNER JOIN users_items ON items.i_id=users_items.item_id WHERE users_items.user_id='$user_id'";
                            $item_query_result=mysqli_query($con,$select_item_query)or die(mysqli_error($con));
                            if(mysqli_num_rows($item_query_result)==0)
        {
            echo "Add items to the cart first!";
            header('location:product.php');
        }
        else
        {
            $sum=0;
            $count=0;
            $arr1=array();
            $i=0;
            while($row=mysqli_fetch_array($item_query_result))
            {
                $sum=$sum+$row['price'];
                $count=$count+1; 
                $arr1[$i]=$row['i_id'];
                $i=$i+1;
                            ?>
                            <tr style="height:10px">
                       
                                <td><?php echo $count ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><a href="cart-remove.php?id=<?php echo $row['i_id'] ?>" class="remove-item-link">Remove</a> </td>
                            </tr>
                            <?php
            }
            ?>
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td>Rs<?php echo $sum ?> /-</td>
                                <td><a href="success.php?id=<?php foreach($arr1 as $arr)
                                {
                                    echo $arr;
                                }
?>"><button class="btn btn-primary">Confirm Order</button></a></td>
                            </tr>
           
                        </tbody>       
                   
                </table>
            </div>
                          <?php
        }
                         ?>
            <?php
        require 'footer.php';
        ?>
    </body>
</html>

