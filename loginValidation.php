<?php
        //Include database connection details
        require_once('connect.php');
     
        //Array to store validation errors
        $errmsg_arr = array();
     
        //Validation error flag
        $errflag = false;

        //file to check
        $files=fopen("log.txt", "w");
        fwrite($files, "string");
     
        //Sanitize the POST values
        $username = $_POST["username"];
        $password = $_POST["password"];
        fwrite($files, $username);
        fwrite($files, $password);
     
        //Input Validations
        if($username == '') {
            $errmsg_arr[] = 'username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
     
        //If there are input validations, redirect back to the login form
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            fwrite($files, $errmsg_arr);
            fwrite($files, $errflag);
            session_write_close();
            header("location: Login1.html");
            exit();
        }
     
        //Create query
        $qry="SELECT username,password FROM login WHERE username='$username' AND password='$password'";
        $result=mysqli_query($con,$qry);
        $num_row = mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
        if( $num_row ==1 )
         {
            $_SESSION['username']=$row['username'];
            header("Location: firstLogin.php");
           	exit;   
        }
        else
        {
            header("Location: error.html");
        }
        fclose($files);
?>
