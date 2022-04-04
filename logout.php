<?php
	require './includes/common.php';
	
	// destroy the session if present
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                <style>
          .navbar-inverse{
            border-style: outset;
            border-color: #fff !important
                
        }
          </style>
	</head>
	<body>
		<?php
			require './includes/header.php';
		?>
            <div class="lout-bg" style="background-color: #000;padding: 24px">
                 <div class="col-md-4">
                     <img src="https://media.giphy.com/media/IV0kNUL9p1wAZq82MJ/giphy.gif" class="img-responsive live-support-img" alt="Live Support" style="padding-top: 60px">
              </div>
            <div class="container panel-margin" style="    padding-top: 300px; padding-bottom: 200px;">
                <div class="alert alert-success" style="font-size: 24px;color: olive;border: none;background-color: transparent">
                You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
            </div>
            </div> </div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>