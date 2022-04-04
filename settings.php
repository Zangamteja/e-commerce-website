<?php
	require './includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Settings | Sneakers Paradise</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                
                               <style>
                    
             

.settings-bg{
  
    background-image: url("./img/bg4") ;
    	background-position: center;
        background-size: cover;
        padding: 5px;
}
.form-control{
    background-color: transparent !important; 
    color: #fff !important;
    
}
              </style>
                
                
	</head>
	<body>
		<?php
			require './includes/header.php';
		?>
            <div class="settings-bg">
            <div class="container panel-margin"  style="margin-top : 250px;margin-bottom : 200px">
                <div class="panel panel-default" style="background-color:transparent;opacity: 0.8">
				<div class="panel-heading" style="background-color:transparent;color: #fff">
					<h2 class="panel-title">Change Password</h2>
				</div>
				<div class="panel-body">
					<form action="settings_script.php" method="post">
						<div class="form-group">
							<input type="password" class="form-control" name="old_pass" placeholder="Old Password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="new_pass" placeholder="New Password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type New Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Change</button>
					</form>
				</div>
			</div>
		</div>
            </div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>
