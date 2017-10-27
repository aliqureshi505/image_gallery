<?php   include("header.php");  include("admin_navbar.php"); ?>


<html>
<head>
	<title></title>
    <style type="text/css">
    #view_all_products{text-decoration: underline; color: #F68A1E; font-weight: bold;}


	</style>
</head>
<body>

	<div class="container">

		<h3 id="view_all_products">Vew All Products</h3> <br>

         <table class="table table-responsive table-striped table-bordered">

				<tr >   
					<th style="text-align:center">  Product ID   </th>    
					<th style="text-align:center">  Title        </th>    
					<th style="text-align:center">  Description  </th>    
					<th style="text-align:center">  Price        </th>    
					  
				</tr>




			<?php 
			 $conn = mysqli_connect("localhost", "root", "", "login/signup project");
			 $view_all_products_query = " SELECT * FROM products ORDER BY Product_ID DESC ";
             $res = mysqli_query($conn, $view_all_products_query);

             while ($row = mysqli_fetch_assoc($res)) {
             	
            

			?>

			    <tr style="text-align:center;">  
					 <td class="text text-primary"><?php  echo $row['Product_ID']?></td> 

					 <td><?php  echo $row['Title']?></td> 

					 <td><?php  echo $row['Description']?></td>   

					 

					 <td><?php echo "<img   src='  product_images/".$row['Image'].".png'  alt='No Image'  "   ?> </td>  

		        </tr>

			<?php  } ?>
		

		</table>	


	</div>

</body>
</html>



<hr>
<?php   include("admin_footer.php");   ?>