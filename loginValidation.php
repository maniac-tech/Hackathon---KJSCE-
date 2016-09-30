<?php 
//Login Validation code for the App
	
	//WAMP SERVER DATABASE CONNECTION SETTINGS:
	$server_name="localhost";
	$username="root";
	$password="";
	$database="second_innings";
	$table_name="si_reg";

	//LOGIN PAGE VARIABLES 
	$login_username;
	$login_password;
	$sql;

	//CONNNECTING TO THE DATABASE 
	$conn = new mysqli ($servername,$username,$password,$database)

	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		//ENTER THE FIELD DETAILS AND YOU CAN ACCESS THE VALUES.
		$login_username = $_POST("*****") 
		$login_password = $_POST("*****")

		if ($conn -> connect_error)
			die ("Connection Failed:". $conn->connect_error)
		else
			$sql = "SELECT * FROM si_reg WHERE login_username='$login_username' AND login_password='$login_password'";
			$result=mysql_query($sql)		
	}



 ?>
