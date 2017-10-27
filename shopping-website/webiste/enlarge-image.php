
<?php include("bs_files.php"); ?>
<?php 

	if (isset($_GET['img-name'])) {

		$img_name = $_GET['img-name'];
		

		echo " <center>  <img class='img-thumbnail'  style='margin-top:30px;' src='../../admin_board/product_images/".$img_name.".png'  alt='No Image'  >   </center>";

		


		 
		 echo " &nbsp; ";

		 echo "  <center>   <a href='index.php'  > 
								<button class='btn btn-info active '>    < Back To Page   </button>   
		 					</a> 
		 		 
		 		 </center>  ";	

	 }




?>