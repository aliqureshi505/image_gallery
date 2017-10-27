<?php  include("header.php");  ?>
<?php  include("carousel.php");  ?>


<html>
<head>
	<title>Shop-Creet</title>
	<style type="text/css">
   
	#images{ margin-top: 20px;}

     #images a:hover{text-decoration: none; color: red;}
	
	
	</style>
</head>
<body>
 <hr>
	<div class="container">
		<div class="row">
				<h3 style="color:gray; text-decoration:none;">Latest Image :- </h3>
		<?php   

/*  CONNECT TO DATABASE TO FETCH RECORDS */

  $conn = mysqli_connect("localhost", "root","", "login/signup project" );
  $query = "SELECT * FROM products ORDER BY Product_ID DESC";
  $res = mysqli_query($conn, $query);
 while( $row = mysqli_fetch_assoc($res) )

 { 
 	?>
      


       
	      	   
                <div class="col-md-3 " id="images"> 
				 	
				 	<h3 id="heading_for_title"> <?php echo $row['Title'] ?> </h3>
                     
		    	   	    	   
		    	   
		    	    <?php echo "<img class='img-thumbnail'  src='../../admin_board/product_images/".$row['Image'].".png'  alt='No Image'  >"   ?> 

		    	    &nbsp;
		    	     

		    	   <!-- <button class="btn btn-primary btn-block"   data-toggle="modal" data-target="#img-modal" >Enlarge Image</button>  -->
		    	   
		    	   <!--  send image uniqid into query srting for downloading, store image name into variable and then insert that variable into query string -->

		    	   <?php	 $image_name = $row['Image'];   ?>

		    	    <a  href="download.php?img-name = <?php  echo $image_name; ?>">
		    	    	<button class="btn btn-danger btn-block" id="download-btn">Download Image</button> 
		    	    </a>

		    	      &nbsp;

		    	    <a href="enlarge-image.php?img-name=<?php  echo $image_name ?>"   target="_blank"  >
		    	    	<button class="btn btn-primary btn-block">View Enlarge Image</button>
		    	    </a>	
		    	    
		
				 </div> 
     	    
    


  
				<?php }   // end of while loop ?> 


<br><br>


		</div>  <!-- end of class row -->

		
   </div>   <!-- end of class container -->

			<!--  main websute footer   -->

			<?php   include("footer.php"); ?>

			<!--  end of main websute footer   -->



</body>
</html>
<br>







