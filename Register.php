<?php 
	require 'connect.php';
	$username=$_POST["username"];
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$Cpassword=$_POST["Cpassword"];
	$phone_self=$_POST["phone_self"];
	$address1=$_POST["address1"];
	$address2=$_POST["address2"];
	$city=$_POST["city"];
	$pincode=$_POST["pincode"];
	$state=$_POST["state"];
	$person_to_contact=$_POST["person_to_contact"];
	$relation=$_POST["relation"];
	$phone_alt=$_POST["phone_alt"];
	//$files=fopen("reg.txt", "w");
	if ($password == $Cpassword) {
		$sql=mysqli_query($con,"SELECT username FROM user_details WHERE username='$username'");
 		if(mysqli_num_rows($sql)>=1)
   		{
    		echo"name already exists";
   		}
 		else
    	{
   			$qry="INSERT INTO user_details (username, first_name, last_name, email, phone_self, address1, address2, city, pincode, state, person_to_contact, relation, phone_alt) VALUES ('$username','$firstname','$lastname','email','$phone_self','$address1','$address2','$city','$pincode','$state','$person_to_contact','$relation','$phone_alt')";
   			mysqli_query($con,$qry);
   			$qry2="INSERT INTO login (username, password) VALUES ('$username','$password')";
   			mysqli_query($con,$qry2);
    	}
		// fwrite($files, $username);
		// fwrite($files, $firstname);
		// fwrite($files, $lastname);
		// fwrite($files, $email);
		// fwrite($files, $password);
		// fwrite($files, $phone_self);
		// fwrite($files, $address1);
		// fwrite($files, $address2);
		// fwrite($files, $city);
		// fwrite($files, $pincode);
		// fwrite($files, $state);
		// fwrite($files, $person_to_contact);
		// fwrite($files, $relation);
		// fwrite($files, $phone_alt);
	}
	else {
		// fwrite($files, "different");
	}
?>