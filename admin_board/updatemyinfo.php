<?php  require ("header.php");  ?>
<?php  require ("admin_navbar.php");  ?>

<!--    PHP CODE TO UPDATE INFO   -->

<?php 

if(isset($_POST['update-info-btn'])){
 
       session_start();
	function sanitize_validate_input($data){
 	    	$data = filter_var($data, FILTER_SANITIZE_STRING);
 	    	$data = stripcslashes($data);
 	    	$data = trim($data);
 	    	$data = htmlspecialchars($data);
 	    	
 	    	return $data; }

 	 function validate_email($data){
 	 	$data = filter_var($data, FILTER_VALIDATE_EMAIL);
 	 	return $data;
 	 }   	

/*   sanitize and validate data from user  */
 	    	$updated_name = sanitize_validate_input($_POST['name']);
 	    	$updated_last_name = sanitize_validate_input($_POST['last_name']);
 	    	$updated_password = sanitize_validate_input($_POST['password']);
 	    	$confirm_updated_password = sanitize_validate_input($_POST['confirm_password']);

 	    	$updated_email = validate_email($_POST['email']);


 	    	/*  check password is equals to confirm password  */

 	    	if($updated_password !== $confirm_updated_password){
 	    		$_SESSION['pass_not_match'] = "Password Does not match ";
 	    	}


 	    	/*  connect to database */
 	    	$conn = mysqli_connect("localhost", "root", "", "login/signup project") or die("Error in connection");

 	    	/* query to udate information 
				Remember always use , while selecting more than one columns dont use AND it will check condition
	
 	    	*/

            $query = "  UPDATE  users SET 
                         First_Name = '$updated_name',
                          Last_name = '$updated_last_name',
                          Password = '$updated_password',
                          Confirm_Password = '$confirm_updated_password',
                          Email = '$updated_email' 
                         WHERE Is_Admin = 'yes'  ";


            if( mysqli_query($conn, $query) )
            {
            	$_SESSION['info_updated_success'] = "Info updated successfully. <br> Click <a href='logout.php'> here </a>  to redirect to on Login page  ";
            }
            
            
            
            	
  }            
   



?>


<html>
<head>
<style type="text/css">
#update-info { color: red; text-decoration: underline; }
 .form-control{font-size: 20px;}
</style>

</head>
<body>
	<div class="container">

		<h3 id="update-info" >Update My-Info</h3>
			


				<!--  error printing   -->
				  	


				  	<?php  if (isset($_SESSION['pass_not_match'])) {
				  		     echo '<p class="alert alert-danger col-md-offset-4 col-md-4 col-md-offset-4" >';
                             echo  $_SESSION['pass_not_match'] ;   
                             echo '  <a href="#"  class="close" data-dismiss="alert" > &times; </a>  </p>';
				  	          }
				  	          if (isset($_SESSION['info_updated_success'])) {
				  		     echo '<p class="alert alert-success col-md-offset-4 col-md-4 col-md-offset-4" >';
                             echo  $_SESSION['info_updated_success'] ;   
                             echo '  <a href="#"  class="close" data-dismiss="alert" > &times; </a>  </p>';
                              }

				  	            ?>





			<div class="row">
				<div class="col-md-offset-4 col-md-4 col-md-offset-4">
				   <form method="post">	

							<h4>Enter New name:</h4> 
						<input type="text" class="form-control" name="name"  required > 

						<h4>Enter Last name:</h4> 
						<input type="text" class="form-control" name="last_name"  required > 



						<h4>Enter Password:</h4> 
						<input type="password" class="form-control" name="password" required > 

						<h4>Confirm Password:</h4> 
						<input type="password" class="form-control" name="confirm_password" required > 

						<h4>Enter Email Address:</h4> 
						<input type="text" class="form-control" name="email" required > 

						<h4>Admin Status =  Yes </h4> 

						   <button class="btn btn-primary btn-block" name="update-info-btn"> <h5> Update Info  </h5>  </button>
				    </form>
				</div>
			</div>

	</div>   <br><br>

<hr>

</body>
</html>
<?php   include("admin_footer.php"); ?>