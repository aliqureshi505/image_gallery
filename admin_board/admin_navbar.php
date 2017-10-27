<?php  require("bs_files.php");  ?>

<!DOCTYPE html>
<head>
<style type="text/css">


.nav li a {margin-left: 15px; font-size: 15px; font-weight: bold; border-bottom: 2px solid transparent;}

.nav li a:hover { border-bottom: 2px solid #0040ff;  }	

.glyphicon{ color: #3399ff;}	

</style>	
	


</head>
<body>
<!--   admin nav bar   -->

		       
			   		

				<div class="navbar navbar-default  ">
			<div class="container">
				<div class="navbar-header">




			                <!--  navbar collpase button -->

			                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span> 
						        </button>

			                <!--  end of navbar collapse button -->	

					
				  </div>




				<div class="collapse navbar-collapse" id="myNavbar">    <!--   this div is just only for collapsing navbar-->




						<ul class="nav navbar-nav " >
							<li><a href="home.php"> <span class="glyphicon glyphicon-home"> </span>     &nbsp; Home  </a></li>
							<li><a href="view_products.php"> <span class="glyphicon glyphicon-th"> </span>       &nbsp; View-Products   </a></li>
							<li><a href="add-products.php"> <span class="glyphicon glyphicon-plus"> </span>     &nbsp; Add-Products  </a></li>
							<li><a href="manage-edit products.php"> <span class="glyphicon glyphicon-list-alt"> </span> &nbsp; Manage/Edit-Products  </a></li>
							<li><a href="updatemyinfo.php"> <span class="glyphicon glyphicon-user"> </span>     &nbsp; Update-MyInfo  </a></li>
							
							<li><a href="logout.php"> <span class="glyphicon glyphicon-off"> </span> Logout  </a></li>
						</ul>

			     </div>   <!--  end of div for collapsing navbar-->

			</div>
        </div>
			 

			
   <!--  admin nav bar   -->
</body>
</html>