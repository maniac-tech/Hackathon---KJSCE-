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


	//RUNNING SQL QUERY ON SUCCESFULL POST REQUEST FROM HTML PAGE
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		//ENTER THE FIELD DETAILS AND YOU CAN ACCESS THE VALUES.
		$login_username = $_POST("*****") 
		$login_password = $_POST("*****")


		//CHECKING CONNECTION STATUS
		if ($conn -> connect_error)
			die ("Connection Failed:". $conn->connect_error)
		else

		//RUNNING SQL QUERY ON SUCCESFULL CONNECTION
			$sql = "SELECT * FROM si_reg WHERE login_username='$login_username' AND login_password='$login_password'";
			$result=mysql_query($sql)	

		//CHECKING FOR TRUE SQL OUTPUT	
		if($result) {
    		if(mysql_num_rows($result) > 0) {
    			//Login Successful
    			session_regenerate_id();
    			$member = mysql_fetch_assoc($result);
    			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
    			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
    			$_SESSION['SESS_LAST_NAME'] = $member['password'];
    			session_write_close();
    			header("location:****");
    			exit();
    		}else {
    			//Login failed
    			$errmsg_arr[] = 'user name and password not found';
    			$errflag = true;
    			if($errflag) {
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location:***");
    				exit();
    			}
    		}
    	}else {
    		die("Query failed");
    	}
	}



 ?>
