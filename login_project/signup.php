<?php 
  
session_start();
		 	/*

		              Function  to validate and sanitize input from user  and email also:
		              ======================================================
		  	*/	
		      	    function sanitize_validate_input($data){
		 	    	$data = filter_var($data, FILTER_SANITIZE_STRING);
		 	    	//$data = filter_var($data, FILTER_VALIDATE_EMAIL);
		 	    	$data = stripcslashes($data);
		 	    	$data = trim($data);
		 	    	$data = htmlspecialchars($data);
		 	    	
		 	    	return $data; }


		 	    	function validate_email($data){
		 	    		$data = filter_var($data, FILTER_VALIDATE_EMAIL);
		 	    		return $data;
		 	    	}

		 	    	

		 	    	$first_name = sanitize_validate_input($_POST['first_name']);
		 	    	$last_name = sanitize_validate_input($_POST['last_name']);
		 	    	$password = sanitize_validate_input($_POST['password']);
		 	    	$cnfrm_password = sanitize_validate_input($_POST['cnfrm_password']);
		 	    	$email = validate_email($_POST['email']);

		            


		 	    	if( $password  !==  $cnfrm_password ) {
		 	    		echo $_SESSION['Password_Not_Match'] = "Password doesn't match Please enter correct password";
		 	    		/*  if you want to show error within modal then use AJAX technique  */
		 	    		
		 	    	}
		 	    	


		 	    	$conn = mysqli_connect("localhost", "root", "", "login/signup project") or die("Error in connection");
		 	    	$check_user = "INSERT INTO users (First_Name, Last_Name, Password, Confirm_Password, Email)
		 	    					VALUES ('$first_name', '$last_name', '$password', '$cnfrm_password', '$email') ";
		 	    	$res = mysqli_query($conn, $check_user);
		 	    	
		 	    		$_SESSION['signup_successfully'] = "You have signed up successfully";
		 	    		header("location:index.php");
		 	    	
		 	    	
		 	    	
	 	 	    	   




	

	?>