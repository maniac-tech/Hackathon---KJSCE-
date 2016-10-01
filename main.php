<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Second Innings!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<?php 
		require ("navigationBar.html");
	?>
	<center>
		<div class="container" id="Para">
			<h1>Second Innings!</h1>
		</div>
		<div id="loginContent">
			<button>Login now!</button>
	</center>
	</div>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#loginContent").load("Login.html");
    });
});
</script>
</body>
<style type="text/css">
	body{
		background-image: url("city.jpg") /*no-repeat center center fixed*/;
		background-size: 1400px 800px;
		/*-webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;*/
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
		position: relative;
		width: 100%;
	}
	li {
		float: left;
		border-right: 1px solid #bbb;
	}
	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	li a:hover:not(.active) {
		background-color: #111;
	}
	li:last-child {
		border-right: none;
	}
	.active {
		background-color: #4CAF50;
	}
	#Para{
		position: relative;
	}
</style>
</html>
