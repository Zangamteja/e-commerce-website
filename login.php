<?php
    require './includes/common.php';
    // if(isset($_SESSION['email'])){
    //     header('location:home.php');
    // }
?>
<!DOCTYPE html>
<html>
    <head>
		
                 <meta charset="UTF-8">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                <title>Login | Sneakers Paradise </title>
                <style>
                    
                    .panel-default{
     color: #f8f8f8;
}
.login-bg{
  
    background-image: url("./img/bg1.jpg") ;
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
            <div class="login-bg" >
                <form class="form" action="login_script.php" method="POST">
        <div class="content" style="padding-top:250px;padding-bottom:200px;">
            <div class="container" style="background-color: rgba(0, 0, 0, 0.7)">
                <div class="col-md-4 col-md-offset-4" style="color: #fff; background-color: transparent;padding-top: 30px; padding-bottom: 30px;">
                    <div class="form-group">
                        <p>Don't have an Account? <a href="signup.php">Register</a></p>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                    <?php
                    if(isset($_GET['m1'])){
                        echo $_GET['m1'];
                        }
                    ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>
                    </div>
                    <div class="form-group">
                        <p><a href="#">Forgot Password?</a></p>
                    </div>             
</div>            </div>
            </div> </form>
              
                
                	</div>
		<?php
                require "./includes/footer.php";
                ?>
        </body>
</html>