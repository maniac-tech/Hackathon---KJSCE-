<?php 
	require 'connect.php';
	$username=$_POST['username'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	// $files=fopen("Exp.txt", "w");
	// fwrite($files, $username);
	// fwrite($files, $email);
	// fwrite($files, $subject);
	// fwrite($files, $message);
	$qry2="INSERT INTO expert_help (username, email, subject, message) VALUES ('$username','$email','$subject','$message')";
   			mysqli_query($con,$qry2);

	echo "DONE YOU WILL BE REDIRECTED BACK";
	header("Refresh:5 firstLogin.php");
?>