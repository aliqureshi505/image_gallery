<?php
		$product_id_no =  $_GET['id'];	
    
		$conn = mysqli_connect("localhost", "root", "", "login/signup project");

		$delete_product_query = " DELETE  FROM products WHERE Product_ID = $product_id_no  ";

		if(mysqli_query($conn, $delete_product_query)){
			
		   header("location:manage-edit products.php");
		}
		else{echo mysqli_error($conn); }


 ?>