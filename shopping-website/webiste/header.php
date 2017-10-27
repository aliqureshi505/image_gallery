<?php   include("bs_files.php"); ?>


<?php 





        session_start();

    /*   LOGIN ADMIN NAVBAR STATUS  */
	
	if(isset($_SESSION['admin_logged_in'])){
		$login_status = true;
	}
	else{ $login_status = false; }

        /*  VISITOR NUMBER */

		if(!isset($_SESSION['visitor_no'])){

			$_SESSION['visitor_no'] = 5151;
			$visitor_no = $_SESSION['visitor_no'];


		}	
		else{

		$visitor_no  =	++$_SESSION['visitor_no']; // always remember to use pre increment otherwise it will work when page reload two times
		}



?>











<!DOCTYPE html>
<head>
	<title></title>
	<style type="text/css">
	
	.navbar-default{ background: white;    border: 2px solid transparent; font-size: 15px; margin-top: 10px;  }
	.navbar-default li a:hover{border-bottom: 3px solid orange;  color: black; }
	.navbar-default li a { border-bottom: 3px solid transparent; margin-left: 3px;}
    #nav-glyphicon .glyphicon {color: orange; }



	</style>
</head>
<body>
	
	<!-- main navbar  -->

		<div class="navbar navbar-default ">
			<div class="container">
				<div class="navbar-header">




                <!--  navbar collpase button -->

                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			        </button>

                <!--  end of navbar collapse button -->	

					<img  src="assets/gallery.gif" height="45px" width="200px">
				</div>




				<div class="collapse navbar-collapse" id="myNavbar">    <!--   this div is just only for collapsing navbar-->




				  <ul class="nav navbar-nav   navbar-right " id="nav-glyphicon">
								

					 <li><a href="index.php">  <span class="glyphicon glyphicon-home"> </span>     &nbsp;&nbsp;Home</a></li>
					 <li><a href="">  <span class="glyphicon glyphicon-camera"></span>    &nbsp;&nbsp;All Images</a></li>
					 <li><a href="">  <span class="glyphicon glyphicon-picture"></span>   &nbsp;&nbsp;Latest Images</a></li>
					 <li><a href="">  <span class="glyphicon glyphicon-star"></span>   &nbsp;&nbsp;Visitor No: <?php  echo $visitor_no; ?> </a></li>
					 <li><a href="contact.php">  <span class="glyphicon glyphicon-envelope"></span>   &nbsp;&nbsp;Contact Us</a></li>
					 <li><a href="about us.php">  <span class="glyphicon glyphicon-info-sign"></span> &nbsp;&nbsp;About Us</a></li>




							<li> 
								
								     
								 
								 <?php 
								     if($login_status){    echo "<a href='logout.php'>    <span class='glyphicon glyphicon-user'></span>   Logout Admin  </a> ";   }								   
								      
								     else{ echo "<a href='../../admin_board/' target='_blank' >   <span class='glyphicon glyphicon-log-in'></span>   &nbsp;    Login Admin </a>";  }  
								  ?>   
					         

					         </li>




							
						</ul>

			     </div>   <!--  end of div for collapsing navbar-->

			</div>
        </div>



	<!-- main navbar  -->
			
</body>
</html>
