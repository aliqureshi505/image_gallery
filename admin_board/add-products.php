<?php   include ("bs_files.php"); ?>
<?php   include("header.php") ?>
<?php   include("admin_navbar.php"); ?>




<?php 

/* CHECK IS PRODUCT ADDED OR NOT */

if (isset($_POST['add_product_submit_btn'])) {

/* STORE ALL DETAILS INTO VARIABLE FROM USER */
	
	$product_title = $_POST['title'];
	$product_description =$_POST['descrptn'];
	//$product_price = $_POST['price'];
	$product_image = $_FILES['prodct_img'];
	$product_image_no = uniqid();




	

  /* CONNECT TO DATABAESE*/

$conn = mysqli_connect("localhost","root","","login/signup project") or die(mysqli_connect_error($conn));


/* MOVE UPLOADED FILE TO OUR DERSIRE DIRECTORY */

    move_uploaded_file($product_image['tmp_name'], "product_images/".$product_image_no.".png");

/* INSERT DATA INTO DATABASE */

$insert_product_query = "INSERT INTO products ( Title, Description,  Image) 
                         VALUES ('$product_title', '$product_description',  '$product_image_no') ";

      $res = mysqli_query($conn, $insert_product_query);
     	//session_start();
     	$id_no =  mysqli_insert_id($conn);
     	
     	$product_addes_success = "New Product Inserted Successfully With ID-no: $id_no  ";
                   

}
?>





<html>
<head>
	<title></title>
	<style type="text/css">
	#add_new_products{ color: #3385FF;text-decoration: underline;}

	</style>
</head>
<body>
    <div class="container">  <h3 id="add_new_products">Add New Products:</h3>   </div>
    <div class="container">

    	<div class="row">
    		

<!--   SHOW SUCCESS MESSAGE IF PRODUCT ADDED SUCCESSFULY IN DATABASE      -->

    		    			<?php 

    			  if (isset($product_addes_success )) {
    			  	   echo ' <p class="alert alert-success col-md-offset-4 col-md-4 col-md-offset-4" >    <a href="#"  class="close" data-dismiss="alert" > &times; </a>  ' ;
    			  	   echo $product_addes_success ." <br> Click  <a href='view_products.php'> HERE  </a> to view your product";
    			  	   echo ' </p>';
    			  }

    			?>



    		<div class="col-md-offset-4 col-md-4 col-md-offset-4 ">

         	 <form action="add-products.php" method="post" enctype="multipart/form-data">		
    			
	    		<h4>	Product Title:  </h4>      <input type="text" class="form-control" name="title" required >

	            <h4>    Product Description: </h4> <textarea rows=4 cols=4 class="form-control" name="descrptn"  required ></textarea>

	    <!--		<h4>	Product Price: </h4>       <input type="text" class="form-control" name="price" required > --> <br> 

	    		<h4>	Product Image: </h4>       <input type="file" name="prodct_img" required  > <br>

	    	  
	    		  
                <button class="btn btn-success btn-lg btn-block" name="add_product_submit_btn" >Add This Product</button>
	     </form>		  
    		</div>
    	</div>

    </div>
</body>
</html>



<br><br>
<hr style=" border:1px solid #FF0017;">
<?php   include("admin_footer.php"); ?>