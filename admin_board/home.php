<?php  require ("header.php");  ?>
<?php  require ("admin_navbar.php");  ?>



<html>
<head>
	<title></title>
	<style type="text/css">
	#jumbotron_bg_color { background-color: #DD5044; }
	form{ margin-top: 20px; text-align: center; }
	

	</style>
</head>
<body>

		<div class="jumbotron" id="jumbotron_bg_color">
			<div class="container">

		<h2 style="text-align:center; color:white; ">	Hello <?php echo $_SESSION['logged_in_name']; ?>  here you can control almost anyting on your website <br>Go ahead and manage your webiste in easiest way using Content Management System  </h2>



	<div class="row">	
			  <div class="col-md-offset-1 col-md-2">		
		             <form action="manage-edit products.php">  <button class="btn btn-primary btn-lg">Manage Products</button>  </form>
		      </div>



		      <div class="col-md-2">	
		             <form action="updatemyinfo.php">  <button class="btn btn-info btn-lg">Update MyInfo</button>  </form>
		      </div>  



		      <div class="col-md-2">
		             <form action="add-products.php">  <button class="btn btn-success btn-lg">Add Products</button>  </form>
		      </div>



		      <div class="col-md-2">
		             <form action="view_products.php">  <button class="btn btn-warning btn-lg">View Products</button>  </form>
		      </div>



		      <div class="col-md-2  ">
		             <form action="logout.php">  <button class="btn btn-primary btn-lg">Logout Me</button>  </form>
		      </div>


    </div>    

    		</div>
		</div>

<hr>
</body>
</html>
<?php   include("admin_footer.php"); ?>