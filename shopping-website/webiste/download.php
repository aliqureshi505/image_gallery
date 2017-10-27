<?php 
var_dump($_GET);

if (isset($_GET['img-name_']) ) {
 	  
 	  echo $_GET['img-name_'];
 	 
 	   $file = "../../admin_board/product_images/".$_GET['img-name_'].".png";

 	 	header('Content-type: application/force-download');
		header('Content-disposition:attachment; filename= "'.basename($file).'"');
		header('Content-length:' . filesize($file));
		readfile($file);

     

 } 

?>



