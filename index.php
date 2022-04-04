<?php
	// if already logged in, go to products page
	if(isset($_SESSION["email"])){
		header("location: nike.php");
	}

	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sneakers Paradise</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	
        
                <style>
                    .dropbtn {
                        background-color: #870200;
                        color: white;
                        padding: 16px;
                        font-size: 16px;
                        border: none;
                    }
                    .dropdown {
                        position: relative;
                        display: inline-block;
                    }
                    .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #870200;
                        min-width: 160px;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                        z-index: 1;
                    }
                    .dropdown-content a {
                        color: #fff;
                        padding: 12px 16px;                      
                        text-decoration: none;
                        display: block;
                    }
                    
                    .dropdown-content a:hover {background-color: #430202;}
                    
                    .dropdown:hover .dropdown-content {display: block;}
                    
                    .dropdown:hover .dropbtn {background-color: #430202;}
                </style>
                
                
                
        </head>
	<body>
		<?php
			require './includes/header.php';
		?>
		<div id="banner-image" >
			<div class="container">
				<div id="banner_content">
                                    <h1>Welcome to Sneaker Paradise</h1>

                                   <p>Let your style shine bright</p>                                 
                                         
<div class="dropdown">
  <button class="dropbtn">Select Brand</button>
  <div class="dropdown-content">
      <a href="Nike.php">Nike</a>
      <a href="Adidas.php">Adidas</a>
      <a href="Vans.php">Vans</a>
  </div>
</div>
</div>
</div>

</body>
</html>
				</div>
			</div>
		
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>