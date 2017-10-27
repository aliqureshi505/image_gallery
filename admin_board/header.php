<?php  include("bs_files.php"); 

 ?>
<?php 

 session_start();
  if( ! isset($_SESSION['admin_logged_in'])){
  	   
  	header("location:../login_project/index.php");
  }




?>







<html>
<head>
	<title></title>
	<style type="text/css">
	*{margin: 0px; padding: 0px;}
	#header{ background-color: #3385ff; padding: 10px; color: white; margin-top: 10px; font-weight: bold; letter-spacing: 1px;}
	#color-ok { color: #33ff33;}

	

	</style>
</head>
<body>

	<div class="container-fluid">
	   <div class="row ">

		   <div id="header" class="col-md-12" >  <center> <h3 >  <span id="color-ok" class="glyphicon glyphicon-ok"></span> &nbsp; Welcome To Admin Panel -  <?php    echo  $_SESSION['logged_in_name'];    ?>     </h3>  </center>  </div>
	  		
	   </div>
	   
	   <br>
   
	 </div>


</body>
</html>

