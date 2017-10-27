
<?php 
include("bs_files.php");  
?>

<?php 
   
   session_start();
   if( isset($_SESSION['logged_in']) ){
         
         header("location:already_login.php");
     
     }
     
  
?>

<html>
<head>
	<title>Login-Panel</title>
	<style type="text/css">
	
	body{background-image: url("blur3.jpg"); background-repeat: no-repeat; background-size: cover;}
    span{float: left;}
    .form-control { font-size: 21px;}
    legend h3 {font-weight: bold; letter-spacing: 1px;  color: #1a1aff;}
    .btn{ font-size: 16px; letter-spacing: 1px;}
    forgotpassword a{ color: red; float: left;}
    #Enter email{ color: blue;  font-size: 18px; }
    #signup_modal_header {background: #5CB85C; color: white; padding: 10px; margin-right: 20px;}
   

	</style>
	
</head>
<body>
            <br><br><br>
    <div class="container">
    	
    			
    				<form method="post" action="verify_login.php">

    					<center>
    					<fieldset>
    						<legend> <img src="user_img.png" height="50px" width="50px">  <h3>    Login Details </h3> </legend>
    						 

                             <!--
                                    If username or password is invalid:
                                    =====================================
                                
                             -->
    						          <?php             if(isset($_SESSION['error'])){
                                                echo '<p class="alert alert-danger col-md-offset-4 col-md-4 col-md-offset-4" >';
                                                echo  $_SESSION['error'] ;   
                                                echo '  <a href="#"  class="close" data-dismiss="alert" > &times; </a>  </p>';
                                                
                                                }
                                                if(isset($_SESSION['mail_sent'])){
                                                     echo '<p class="alert alert-danger col-md-offset-4 col-md-4 col-md-offset-4" >';
                                                     echo  $_SESSION['mail_sent'] ;   
                                                     echo '  <a href="#"  class="close" data-dismiss="alert" > &times; </a>  </p>';
                                                     
                                                }
                                                if (isset($_SESSION['mail_not_sent'])) {
                                                     echo '<p class="alert alert-danger col-md-offset-4 col-md-4 col-md-offset-4" >';
                                                     echo  $_SESSION['mail_not_sent'] ;   
                                                     echo '  <a href="#"  class="close" data-dismiss="alert" > &times; </a>  </p>';
                                                    
                                                }
                                                if(isset($_SESSION['signup_successfully'])){

                                                     echo '<p class="alert alert-success col-md-offset-4 col-md-4 col-md-offset-4" >';
                                                     echo  $_SESSION['signup_successfully'] ;   
                                                     echo '  <a href="#"  class="close" data-dismiss="alert" > &times; </a>  </p>';
                                                        
                                                  }
                                                


                                      ?> 




                         <!--   MAIN CONTENT OF FRON END -->               

                          <div class="row">
                          	<div class="col-md-offset-4 col-md-4 col-md-offset-4">
    							   <h4>Enter User Name : </h4> 
                            	   <input class="form-control" type="text" name="login_name"  required > 
                            </div>
                          </div>  

						
                          <div class="row">
                          	<div class="col-md-offset-4 col-md-4 col-md-offset-4">
                          		<h4>Enter Password: </h4>  
    							<input class="form-control" type="password" name="login_password" required >   <br>


                                  <forgotpassword><a href="#forget_modal" data-toggle="modal"> Forget Password ?  </a> </forgotpassword> 
    					     

                             </div>
    				     </div>
    						<br>


                            <div class="row">
                            <div class="col-md-offset-4 col-md-4 col-md-offset-4">

    						<button class="btn btn-success btn-block" name="login_btn">Login Me</button>  <br>

                        </div>
                    </div>
                             </form>
                   



                    <div class="row">
                            <div class="col-md-offset-4 col-md-4 col-md-offset-4">

                            <button class="btn btn-danger btn-block" name="login_btn" data-toggle="modal" data-target="#signup_modal"> Sign Up for  Custom User </button> <br>

                        </div>
                    </div>

    					</fieldset>	

    					</center>
    			</div>
</div>

            
                                          <!--   FORGET PASSWORD MODAL     -->
            
            <div class="container">




                <!-- Modal -->
                        <div id="forget_modal" class="modal  fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Forget Password ?</h4>
                              </div>
                              <div class="modal-body">
                                <form action="forget_password.php" method="post" >
                                
                                    <table> 

                                        <tr>   <td> Enter Email Address: &nbsp;&nbsp;&nbsp; </td>   <td> <input  class="form-control" type="email" name="forget_email" required> </td>     </tr>
                                       
                                         

                                    </table>

                                    <br><br>

                                    
                                        <button class="btn btn-success btn-block" >Send Activation code</button>
                                    </form>    


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>



            </div>
            <!--   FORGET PASSWORD MODAL     -->



            <!--   sign up modals  -->




                    <!-- Modal -->
                    <div id="signup_modal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="signup_modal_header">Sign up for new account:</h4>
                          </div>
                          <div class="modal-body">
                             <form action="signup.php" method="post">

                                <table class="table table-responsive">



                                <tr>  <td>First Name: </td>  <td><input type="text" class="form-control" name="first_name" required ></td>   </tr>

                                <tr>  <td>Last Name: </td>  <td><input type="text" class="form-control" name="last_name" required ></td>   </tr>

                                <tr>  <td>Password: </td>  <td><input type="password" class="form-control" name="password" required ></td>   </tr>

                                <tr>  <td>Confirm Password: </td>  <td><input type="password" class="form-control" name="cnfrm_password" required ></td>   </tr>

                                <tr>  <td>Email Address: </td>  <td><input type="email" class="form-control" name="email" required ></td>   </tr>


                                </table>

                                    <button class="btn btn-success btn-block" name="btn_signup">Sign Up </button>

                              </form>      
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>




            <!--  end of sign up modals  -->









</body>
</html>