<!--   UPDATE THIS PRODUCT BUTTON IS CLICKED   -->

<?php 
          

        if (isset($_POST['edit_product_submit_btn'])) {
          
              $new_title = $_POST['to-edit-title'];
              $new_desc = $_POST['to-edit-descrptn'];
              //$new_img  = $_POST['to-edit-prodct_img'];

              $conn = mysqli_connect("localhost", "root", "", "login/signup project");
              
              $update_product_query = "UPDATE products SET
                                        Title = '$new_title',
                                        Description = '$new_desc'
                                      
                                        WHERE Product_ID =".$_POST['id'];
             

              if (mysqli_query($conn, $update_product_query)){ 
               header("location:manage-edit products.php?msg= product updated successfully ");

             }
          }   
                   

    ?>




<?php 

    



       include("header.php"); 
      include("admin_navbar.php"); 




       


       /* FETCH DATA FROM DATABASE TO PRE STORE VALUE IN TITLE, DESCRIPTION */

       $conn = mysqli_connect("localhost", "root", "", "login/signup project");
       $query = "SELECT * FROM products WHERE Product_ID = ".$_GET['product_id'];
       $res = mysqli_query($conn, $query);
       $row = mysqli_fetch_assoc($res);


   /* STORE FETCHED VALUES INTO VARIABLE FOR THE VALUE OF TITLE, DESCRIPTION, IMAGE */

            $title = $row['Title'];
            $desc = $row['Description'];
            $img = $row['Image'];

   
      
          

      
   
 ?>

<html>
<head>
  <title></title>
  <style type="text/css">
  #add_new_products{ color: #3385FF;text-decoration: underline;}

  </style>
</head>
<body>
    <div class="container">  <h3 id="add_new_products">Edit Product:</h3>   </div>
    <div class="container">

      <div class="row">



        <div class="col-md-offset-4 col-md-4 col-md-offset-4 ">

           <form action="edit-product.php" method="post" enctype="multipart/form-data">   

      
          
          <h4>  Product Title:  </h4>      <input type="text" class="form-control" name="to-edit-title" value="<?php echo $title; ?>" required >


              <h4>    Product Description: </h4> <textarea   value="<?php echo $desc; ?>" rows=4 cols=4 class="form-control" name="to-edit-descrptn"  required ></textarea>

      <!--    <h4>  Product Price: </h4>       <input type="text" class="form-control" name="price" required > --> <br>


         <input type="hidden" name="id" value="<?php echo $row['Product_ID']; ?>"> 
     
          <h4>  Product Image: </h4>  <input type="file" name="to-edit-prodct_img"  value="<?php echo $img; ?>" required  > <br>

          
            
                <button class="btn btn-success btn-lg btn-block" name="edit_product_submit_btn" >Update This Product</button>
       </form>      
        </div>
      </div>

    </div>
</body>
</html>

<hr style="border:1px solid red;">
<?php include("admin_footer.php"); ?>