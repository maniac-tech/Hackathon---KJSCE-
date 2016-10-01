<!DOCTYPE html>

<head>
	<title>hii</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/regForm.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php 
		require ("navigationBar.html");
	?>
</head>
<body>
	<div class="container-fluid" role="main"> 
		<div class="jumbotron" id="p">
			<form method="post" action="Register.php">
			Fill in the details below to Register yourself with Us.
				<div class="form-group">
					<p>Username:</p>
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
				<div class="form-group">	    
					<p>First Name:</p>
					<input type="text" class="form-control" name="firstname" placeholder="First Name">
				</div>
				<div class="form-group">	
					<p>Last Name:</p>    
					<input type="text" class="form-control" name="lastname" placeholder="Last Name">
				</div>
				<div class="form-group">
					<p>Email Address:</p>
					<input type="email" class="form-control" name="email" placeholder="email">
				</div>
				<div class="form-group">	    
					<p>Password:</p>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="form-group">	    
					<p>Confirm password:</p>
					<input type="password" class="form-control" name="Cpassword" placeholder="Confirm Password">
				</div>
				<div class="form-group">
					<p>Contact Number:</p>
					<input type="text" class="form-control" name="phone_self" placeholder="Phone">
				</div>
				<div class="form-group">	
					<p>Address:</p>    
					<input type="text" class="form-control" name="address1" placeholder="Address1">
				</div>
				<div class="form-group">	  
					<input type="text" class="form-control" name="address2" placeholder="Address2">
				</div>
				<div class="form-group">	
					<p>City:</p>    
					<input type="text" class="form-control" name="city" placeholder="city">
				</div>
				<div class="form-group">	
					<p>Pincode:</p>    
					<input type="text" class="form-control" name="pincode" placeholder="pincode">
				</div>
				<div class="form-group">	
					<p>State:</p>    
					<input type="text" class="form-control" name="state" placeholder="state">
				</div>
					<div class="form-group">
					<p>Incase of Emergency Contact:</p>
					<input type="text" class="form-control" name="person_to_contact" placeholder="person_to_contact">
				</div>
				<div class="form-group">
					<p>Relation:</p>
					<input type="text" class="form-control" name="relation" placeholder="Relation">
				</div>
				<div class="form-group">
					<p>His Contact Number:</p>
					<input type="text" class="form-control" name="phone_alt" placeholder="Phone">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>
