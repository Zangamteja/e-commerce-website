<?php
    include './includes/common.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Vans | Sneakers Paradise</title>
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
                    
                    .vans_bg{
                        background-image: url("./vans/3") ;
                        background-position: top;                        
                        padding: 5px;     
                        width: 100%;
                        min-height: 420px;
                    
                </style>
                
	</head>
	<body>
		<?php
			require './includes/header.php';
			require './includes/check-if-added.php'; ?>
            <div class="vans_bg">
                 </div>
                        
                        
            <div class="content" style="background-color:#000">
                    <div class="container-fluid" >
                <!-- Row 1 -->
                <div class="row">
                   <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                        <div class="panel-body"><img src="./vans/vans1.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h2 class="p-bold">MIKE GIGLIOTTI FOR VANS X SPONGEBOB SKATE OLD SKOOL</h2>
                                <br>
                                <br>
                                <p>All New Skate Classics: Built Extra Tough on the Inside For Skateboarding .</p>
                                     <p> COLOR : GIGLIOTTI </p>
                                <p class="p-bold">Price : 5,559/-</p> 
                                                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            
                        <div class="panel-body"><img src="./vans/vans2.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h2 class="p-bold">SKATE SK8-HI DECON</h2> <br><br>
                                <p>All New Skate Classics: Built Extra Tough on the Inside For Skateboarding.Cher Strauberry is a skateboarder, musician, and artist from Oakland, CA.</p>
                                <br>  <p>COLOR : (CHER STRAUBERRY) CHEETAH</p>
                                <p class="p-bold">Price : 6,077/-</p> <br>
                                                                   <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    
                   <div class="col-md-4">
                    <div class="panel panel-default text-center">
                           
                        <div class="panel-body"><img src="./vans/vans3.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                 <h2 class="p-bold">SKATE ERA</h2> <br><br>
                               <p>Breana Geering designed her new collection to ensure that each piece is comfortable, allowing her to skate and move.</p>
                               <br>  <p> COLOR - MARSHMALLOW/BLACK </p>
                               <p class="p-bold">Price : 5,188/-</p> <br> <br>
                                                                    <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                           
                        <div class="panel-body"><img src="./vans/vans4.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h2 class="p-bold">CUSTOMS CAMO SKATE SK8-HI</h2> <br><br>
                                <p>Vans Customs have been a tradition since 1966, when Paul Van Doren made shoes with any fabric people brought by the shop. </p>
                                <br>                                 
                                <p class="p-bold">Price : 7,041/-</p> <BR><BR><BR>
                                                  <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                           
                        <div class="panel-body"><img src="./vans/vans5.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                               <h2 class="p-bold">VANS X PARKS PROJECT CUSTOMS SLIP-ON</h2> <br><br>
                                <p>Parks Project’s mission is to protect and preserve our parklands for generations to come by educating, advocating, volunteering, and activating park supporters to get involved in conservation. </p>
                                <br>                                 
                                <p class="p-bold">Price : 7,041/-</p> <BR><BR>
                                                                   <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                        <div class="panel-body"><img src="./vans/vans6.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h2 class="p-bold">ANAHEIM FACTORY AUTHENTIC 44 DX</h2>
                                <p>Pulling from the archives and celebrating our history, the Needlework Anaheim Factory Collection throws it back to the mid-1970s through the late 1980s.</p>
                                <br> <p>COLOR - NEEDLEWORK/SKULLS</p>
                                <p class="p-bold">Price : 6,670/-</p> <BR><BR>
                                                                     <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
