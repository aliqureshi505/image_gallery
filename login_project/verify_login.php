<?php 
 include("bs_files.php");
  
  session_start();  /*  always set session at the top of page */

 if(isset($_POST['login_btn'])){
    


  	/*

              Function  to validate and sanitize input from user:
              ======================================================
  	*/	
      	    function sanitize_validate_input($data){
 	    	$data = filter_var($data, FILTER_SANITIZE_STRING);
 	    	$data = stripcslashes($data);
 	    	$data = trim($data);
 	    	$data = htmlspecialchars($data);
 	    	
 	    	return $data; }


 	    	/*  Storing data from user to variables */

 	    	$name =  sanitize_validate_input( $_POST['login_name']  );
 	    	$password = sanitize_validate_input($_POST['login_password']);


 	    	$conn = mysqli_connect("localhost", "root", "", "login/signup project") or die("Error in connection");
            $query = "SELECT * FROM users WHERE First_Name = '$name' AND Password = '$password' AND Is_Admin = 'yes' ";
            $res  =  mysqli_query($conn, $query);
            if(mysqli_num_rows($res)>0){
            	
            	 
            	  $_SESSION['logged_in'] = true;
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['logged_in_name'] = $name;

            	 echo "<h3>  <center>  welcome.  </center> </h3>";
               echo "string";


            	 /*  move to admin panel  */	
             header("location:../admin_board/index.php");
            }
            else{
            	$_SESSION['error'] = "Invalid Username or Password";
            	header("location:index.php");
            }
 }
 else{ echo "not set";}

?>