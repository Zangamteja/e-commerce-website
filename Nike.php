<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nike | Sneakers Paradise</title>
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
                    
                    .nike_bg{
                        background-image: url("./Nike/bg_nike") ;
                        background-position: top;                        
                        padding: 5px;     
                        width: 100%;
                        min-height: 300px;
                    
                </style>
                
	</head>
	<body>
		<?php
			require './includes/header.php';?>
            <?php
			require './includes/check-if-added.php'; ?>
            <div class="nike_bg">
                 </div>
                        
                        
            <div class="content" style="background-color:#000">
                    <div class="container-fluid" >
                <!-- Row 1 -->
                <div class="row">
                   <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                            <div class="panel-body"><img src="./nike/nike1.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Kobe 5 Protro x Undefeated</h4>
                                <br>
                                <h1>Hall of Fame</h1>
                                <p>As Kobe Bryant takes his place alongside the game's greats in Springfield, Massachusetts, Nike Basketball joins forces with long-time collaborator Undefeated to honour the occasion with a distinguished edition of the Kobe 5 Protro. </p>
                                <p class="p-bold">Price : 16,595/-</p> <br><br>
                                   <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            
                            <div class="panel-body"><img src="./nike/nike2.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Air Jordan 6</h4>
                                <h1>Carmine</h1>
                                <p>MJ's sixth signature silhouette debuted during the 1990–1991 season as His Airness battled rivals in pursuit of an elusive first championship. Now, the silhouette is back in one of its OG colour schemes featuring contrasting shades of white and Carmine Red. This edition of the wildly popular colourway includes throwback Nike Air branding on the heel. Gear up for the 30th anniversary of the Air Jordan 6 with a timeless makeup.</p>
                              <p class="p-bold">Price : 15,995/-</p>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    
                   <div class="col-md-4">
                    <div class="panel panel-default text-center">
                           
                            <div class="panel-body"><img src="./nike/nike3.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                 <h4 class="p-bold">Kyrie 7</h4>
                                <h1>Horus</h1>
                                <p>The mysteries of ancient Egypt are a source of endless fascination for Kyrie. Partnering with Concepts, the Kyrie 7 'Horus' is inspired by glazed ceramics from ancient Egypt—objects once considered magical that represented the power of the gods. Blue hues throughout the multidimensional upper draw from the colours of the artefacts, and Egyptian symbols are worked into the forefoot bands, heel and Swoosh designs.</p>
                                <p class="p-bold">Price : 11,495/-</p>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                           <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                           
                            <div class="panel-body"><img src="./nike/nike4.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">KD14</h4>
                                <h1>Ky-D</h1>
                                <p>Here's to friends joining forces. The KD14 'Ky-D' celebrates the bond between Kyrie Irving and Kevin Durant, both on and off the court. This colourway applies hues from the Kyrie 1 'Dream' to KD's latest silhouette to create a truly hybrid design. Underneath, the KD14's signature tech remains untouched, with a combination of Zoom Air Strobel and Cushlon providing the energy return to help you feel fresh from the opening minutes to the closing seconds.</p>
                                
                                <p class="p-bold">Price : 13,495/-</p>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                          <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                           
                            <div class="panel-body"><img src="./nike/nike5.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Zoom 004 x MMW</h4>
                                <h1>Black</h1>
                                <p>Through work with Givenchy and his own brand ALYX, creative director Matthew M. Williams has earned a reputation for pushing fashion into new spaces. His ethos is simple: combine the influence of his experiences in New York and California with recent technological breakthroughs. The Nike Zoom 004 x MMW speaks to Nike's extensive history of breakthrough innovations, by putting a modern twist on the aesthetic of performance runners from the early noughties. </p>
                                
                                <p class="p-bold">Price : 35,995/-</p>
                                   <?php if (!isset($_SESSION['email'])) { ?>
                                           <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>                           </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                          
                            <div class="panel-body"><img src="./nike/nike6.jfif" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Air jordan 7</h4>
                                <h1>Flint</h1>
                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                <p>Upon its OG release in 1992, the Air Jordan 7 met MJ at the peak of his powers. His Airness dawned the silhouette en route to claiming a second consecutive league title before leading the US to a series of transcendent victories on the international stage in Barcelona, capturing imaginations across the world.</p>
                                <p class="p-bold">Price : 15,995/-</p>
                                 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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