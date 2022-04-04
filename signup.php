<?php
	if(isset($_SESSION["id"])){
		header("location: products.php");
	}
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Signup | Sneakers Paradise</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                <style>
                    
                    .panel-default{
     color: #f8f8f8;
}
.signup-bg{
  
    background-image: url("./img/bg2.jpg") ;
    	background-position: center;
        background-size: cover;
        padding: 5px;
}
              </style>
        
        
        </head>
	<body>
		<?php
			require "./includes/header.php";
		?>
            <div class="signup-bg" >
                
                <div class="container panel-margin" style="padding-top:100px;padding-bottom:10px;">
                    <div class="panel panel-default" style="background-color: rgba(0, 0, 0, 0.7);" >
                        <div class="panel-heading" style="color: #fff; background-color: transparent">
					<h2 class="panel-title">SignUp</h2>
				</div>
                        <div class="panel-body" style="background-color:transparent">
                            <form method="POST" action="signup_script.php" >
                                  
						<div class="form-group" >
							<input type="text" class="form-control" name="name" placeholder="Name" required>
						</div>
						<div class="form-group" >
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>
						<div class="form-group" >
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="form-group" >
							<input type="number" class="form-control" name="contact" placeholder="Contact" required>
						</div>
						<div class="form-group" >
							<input type="text" class="form-control" name="city" placeholder="City" required>
						</div>
						<div class="form-group" >
							<input type="text" class="form-control" name="address" placeholder="Address" required>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
                        <div class="panel-footer" style="  color: #fff;background-color: transparent">
                            <p>Already have an account?Click <a href="login.php">here</a> to create one.</p>
				</div>
                    </div>
                </div>
            </div>	
		<?php
                require "./includes/footer.php";
                ?>
        </body>
</html>