<?php include("header.php");  include("admin_navbar.php");   ?>



<!--     EDIT PRODUCT BUTTON ISSET    -->
  
<?php

		/* Check whether product updated by edit product btn  */

			if(isset($_GET['msg'])){
				$product_updated_success = true;
			}



	if (isset($edit_product_btn)) {

		 $title_edit_product = $_POST['product_title'];
		 $Description_edit_product = $_POST['product_description'];
		 $price_edit_product = $_POST['product_price'];
		 $image_edit_product = $_FILES['product_image'];

		 $image_id = uniqid();
 	
		 move_uploaded_file($image_edit_product['tmp_name'], "product_images/".$image_id.".png" );
		 
		 



		 
	}

 ?>




<!-- END OF EDIT PRODUCT BUTTON ISSET -->


<html>
<head>
	<title></title>
	<style type="text/css">
	#manage_edit_products{ text-decoration: underline; color: #F26109;}

	</style>
</head>
<body>
	 <div class="container"> <div class="row"> <h3 id="manage_edit_products">Manage or Edit Products:</h3> <br>  </div>  </div>

	 		


	 				<div class="container">

 <!-- SHOWING SUCCESS MESSAGE ON UPDATING PRODUCT USING EDIT BUTTON-->

             <?php  if (isset($product_updated_success)) {
             	        $updated = $_GET['msg'];
             	        echo "<p class='alert alert-success' style='text-align:center;'>   <a  class='close' data-dismiss='alert'>&times;</a>   $updated </p>";
             }  ?>
	 					
		

         <table class="table table-responsive table-striped table-bordered">

				<tr >   
					<th style="text-align:center">  Product ID   </th>    
					<th style="text-align:center">  Title        </th>    
					<th style="text-align:center">  Description  </th>    
					    
					<th style="text-align:center">  Image        </th> 
					<th style="text-align:center">  Action        </th>   
				</tr>




			<?php 
			 $conn = mysqli_connect("localhost", "root", "", "login/signup project");
			 $view_all_products_query = " SELECT * FROM products ORDER BY Product_ID DESC ";
             $res = mysqli_query($conn, $view_all_products_query);

             while ($row = mysqli_fetch_assoc($res)) {
             	
            

			   ?>



			   <?php
			   	
			   			/* store product ID that use later for edit product button*/
                    		$product_id = $row['Product_ID'];


			    ?>

			    <tr style="text-align:center;">  
					 <td class="text text-primary"><?php  echo $row['Product_ID']?></td> 

					 <td><?php  echo $row['Title']?></td> 

					 <td><?php  echo $row['Description']?></td>   

					   

					 <td><?php echo " <img   src='product_images/".$row['Image'].".png'   alt='No Image' /> "   ?> </td>

                   

					 <td>      

					 		<a href="edit-product.php?product_id=<?php echo $product_id ?>">	 <button class="btn btn-primary btn-block">Edit </button> </a>&nbsp;  

					 	         <!--  GET PRODUCT ID USING QUERY STRING    -->
					 	         <?php echo " <a href='delete_product.php?id= ".$row['Product_ID']."' > <button class='btn btn-danger btn-block'  >Delete </button>    </a> " ?>
				     </td>  


					 

		        </tr>

			<?php  } ?>
		

		</table>	


	</div>












				<!--  MODAL FOR EDIT PRODUCTS BUTTON  -->

 

			<div class="container">




                <!-- Modal -->
                        <div id="edit_product_modal" class="modal  fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Your Product.</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" enctype="multipart/formdata">
	                              		Product Title: <input type="text" class="form-control" required  name="product_title" value="<?php echo $pre_title ?>"     >


	                              		Product Description: <input type="text" class="form-control" required name="product_description" value="<?php echo $pre_description ?>"   >


	                              	<!--	Product Price: <input type="text" class="form-control" required  name="product_price"    >  -->


	                              <br>  Product Image: <input type="file"  required  name="product_image" value="<?php echo $image_path; ?>"> <br>

	                              		<button class="btn btn-primary btn-block" name="edit_product_btn"><h5> UPDATE THIS PRODUCT </h5> </button>
                                </form>
                              	
                                 


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>



            </div>







<!-- END OF  MODAL FOR EDIT PRODUCTS BUTTON  -->






<!--  DELETE PRODUCT MODAL  -->






					<div class="container">




                <!-- Modal -->
                        <div id="delete_product_modal" class="modal  fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Product.(ID-no:     <?php   echo $_SESSION['product_id_number'];    ?>)</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post">
                                	delete
                                </form>
                              	
                                 


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>



            </div>














<!--   END OF  DELETE PRODUCT MODAL  -->










</body>
</html>




<hr style="border:1px solid red;">
<?php  include("admin_footer.php");  ?>