<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Adidas | Sneakers Paradise  </title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                
                <style>
                    .container-fluid{padding-top: 30px;
                    padding-bottom: 50px;}
                    
                    .adidas_bg{
                        background-image: url("./adidas/bg") ;
                        background-position: top;                        
                        padding: 5px;     
                        width: 100%;
                        min-height: 410px;
                        background-color: #000;
                        background-repeat: no-repeat;
                    
                </style>
                
	</head>
	<body>
		<?php
			require './includes/header.php';
			require './includes/check-if-added.php'; ?>
            <div class="adidas_bg">
                 </div>
                        
                        
            <div class="content" style="background-color:#000">
                    <div class="container-fluid" >
                <!-- Row 1 -->
                <div class="row">
                   <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                        <div class="panel-body"><img src="./adidas/adidas1.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Adidas Yeezy Boost 350 V2 Marathon Running Shoes/Sneakers</h4>
                                <br>                               
                                <p>Color - YECHEIL</p>
                                <p class="p-bold">Price : 28,174/-</p> <br><br>
                                                                  <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                        <div class="panel-body"><img src="./adidas/adidas2.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Adidas Yeezy Quantum Basketball Shoes/Sneakers</h4>
                                <br>                                
                                <p>Color - BARIUM</p>
                                <p class="p-bold">Price : 12,604/-</p> <br><br><br>
                                                                 <?php if (!isset($_SESSION['email'])) { ?>
                              <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                        <div class="panel-body"><img src="./adidas/adidas3.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Adidas Yeezy Desert Rat 500 Chunky Sneakers/Shoes</h4>
                                <br> <br>
                                <p>Color - UTILITY BLACK</p>
                                <p class="p-bold">Price : 25,200/-</p> <br><br>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    

                  
                </div>

                <!-- Row 2 -->
                <div class="row">
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                        <div class="panel-body"><img src="./adidas/adidas4.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Adidas Yeezy 500 High Marathon Running Shoes/Sneakers
                                </h4>
                                <br>                                
                                <p>Color - SLATE</p>
                                <p class="p-bold">Price : 13,712/-</p> <br><br>
                                                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                        <div class="panel-body"><img src="./adidas/adidas5.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Adidas Yeezy Desert Boot Chunky Sneakers/Shoes</h4>
                                <br>    <BR>                         
                                <p>Color - SALT</p>
                                <p class="p-bold">Price : 14,082/-</p> <br><br>
                                                                  <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    
                   <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                        <div class="panel-body"><img src="./adidas/adidas6.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Adidas Yeezy Desert Boot Chunky Sneakers/Shoes</h4>
                                <br> <BR>
                                <p>Color - BRIGHT YELLOW</p>
                                <p class="p-bold">Price : 27,795/-</p> <br><br>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                         
            <?php
        include './includes/footer.php';
    ?>
    <!-- Footer End -->
</body>
</html>