<?php
require 'common.php';
?>

<html>
    <head>
        <title>product</title>
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
        require 'chech-if-added.php';
        ?>
            <div class="container" style="padding-top:90px">
                <div class="jumbotron" >
                    <h1>Welcome To Our LifeStyle!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX7dYHrRf6Z-cHKPqoaNiRgNypVXzTt-NZwzygXxwr9dk_wFzi" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>Cannon EOS</h3>
                                    <h5>Price Rs. 36000</h5>
                                    <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(1))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=1"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ4Nh4p7ML2Tw3RykBPRi5JYjCAId5eNPj1pH8ohxu3Ts90HDbOw" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>Sony DSLR</h3>
                                    <h5>Price Rs. 45000</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(3))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=3"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                     </div>    
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxVqvUWFYDnvt6xMwZpw1OYo4XiC0byz2v4W0gaxcfGzdvfJFLjw" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>OLYMPUS DSLR</h3>
                                    <h5>Price Rs. 50000</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(4))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=4"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi0udIGEyI1nQ67DXSi25RdtgrWBLuJOBy6pLwyhB8or7is_gsbA" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>NIKON DSLR</h3>
                                    <h5>Price Rs. 40000</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(2))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=2"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk4sp2vOQpvMbm6XbQ5lAAH64Jr1ZJy0jk5Py26t5f4hEN56g53A" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>Tital Model #301</h3>
                                    <h5>Price Rs. 13000</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(5))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=5"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWx4dgck9nqd5MD0e1faEC5xtNAj3lAG4zD5ffMdxbNXcL7Z1a" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>Titan Model #201</h3>
                                    <h5>Price Rs. 3000</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(6))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=6"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkiGpDJh1SvzQmyk_nmm6VVzvxorQtYLXZswBPCbhisd0OHW93lA" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>HMT Milan</h3>
                                    <h5>Price Rs. 3000</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(7))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=7"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" >
                        <div class="thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC7DvHtqLg_E0xp8pApUa8esmuB9D-xIP6977NUaI-bvX-nPm7" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>Faber Luba #111</h3>
                                    <h5>Price Rs. 18000</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(8))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                             <a href="cart-add.php>id=8"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    </div>
            </div>
            <div class="container">
                <div class="row">       
            <div class="col-md-3 col-sm-6">
                        <div class="thumbanil">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfTE6VAKgAz8tg-ok_zwPB8CwrjhDGK9WHXXpCNfz6fOAU1DMF3w" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>H&W</h3>
                                    <h5>Price Rs. 800</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(9))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                             <a href="cart-add.php?id=9"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbanil">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ55IYqtY6uOqo1o6qVfdHTEfiGXnPIu5Re5dYd70TRZJ37PEicog" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>LUIS PHIL</h3>
                                    <h5>Price Rs. 1000</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(10))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=10"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbanil">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT47kvmQI495Q2ZMADJWnltO0723I6p2qCyrfQl7puYk-3HyJp_kQ" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>JOHN ZOK</h3>
                                    <h5>Price Rs. 1500</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(11))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=11"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbanil">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV_Uk3RTiSijXyhVDlIzX4NgOpBshmupMwCjYD7CD3IE4b9qSNKg" class="img-responsive">
                                <div style="text-align: center">
                                    <h3>JHALSANI</h3>
                                    <h5>Price Rs. 1300</h5>
                                     <?php
                                    if (!isset($_SESSION['email']))
                                    {
                                       ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    }
                                    else
                                    {
                                        if(check_if_added_cart(12))
                                        {
                                            ?>
                                             <button class="btn btn-danger disabled" style="width:90%">Add To Cart</button>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                           <a href="cart-add.php?id=12"><button class="btn btn-primary" style="width:90%">Add To Cart</button></a>          
                                        <?php
                                           }
                                    }
                                    ?>
                                  
                                </div> 
                        </div>
                    </div>
                </div>
            </div>
           <?php
        require 'footer.php';
        ?>
        </div>
    </body>
</html>
