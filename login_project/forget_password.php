<?php 
include("bs_files.php");  
session_start();

	$conn = mysqli_connect("localhost", "root", "", "login/signup project") or die("Error in connection");   
	$email = $_POST['forget_email']; 

	$query = "SELECT Email FROM users WHERE Email = '$email'  ";
	$res = mysqli_query($conn, $query);
	     if(mysqli_num_rows($res)>0){

		if( mail("$email", "Click here to activate your account", "Activate Account") ){
			$_SESSION['mail_sent'] = "Activation code sent to your Email plz check it.";	
			header("location:index.php");
		  }
	  }
		else{
              $_SESSION['mail_not_sent'] = "Error ! Your email not found";
              header("location:index.php");
		}
	
	

?>
