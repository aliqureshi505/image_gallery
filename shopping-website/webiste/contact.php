<?php     include("header.php");  ?>
<?php 
      /* CONTACT US MESSAGE */
  
     $contact_message_sent = false;
if (isset($_POST['contact-btn'])) {


        function sanitize_validate_input($data){
	  	$data = filter_var($data, FILTER_SANITIZE_STRING);
	  	$data = trim($data);
	  	$data = htmlspecialchars($data);
	  	return $data; }
	  	function validate_email($data){
	  		$data = filter_var($data, FILTER_VALIDATE_EMAIL);
	  		return $data;
	  	}

         /* STORE DATA FROM USER INTO VARIALES*/

	  	$email = validate_email($_POST['email']);
	  	$name = sanitize_validate_input($_POST['name']);
	  	$message = sanitize_validate_input ($_POST['message']); 


	  		$conn = mysqli_connect("localhost", "root", "", "login/signup project");
	  		$contact_us_query = "INSERT INTO contact_us (Email, Name, Message)
	  							 VALUES ('$email', '$name', '$message') ";


	  		if(mysqli_query($conn, $contact_us_query)){
	  			$contact_message_sent = true;
	  		}
	  		

}




?>







<html>
<head>
	<title></title>
	<style type="text/css">

	#contact-jumbotron{background-image:url("assets/contact-img.png"); background-repeat: no-repeat; background-size: 100%;}
	#contat_message_sent {color: white; }
	#contact-us{color: white; font-weight: bold; text-decoration: underline;}

	#contact-jumbotron input, textarea{font-size: 15px;}
	#addres-contact p {font-size: 17px; color: white;}

	
	</style>
</head>
<body style="background-image:url("assets/contact-img.png");">

	<div class="jumbotron" id="contact-jumbotron">
		<div class="container">

			<h3 id="contact-us">Contact Us:</h3> <br>

<!--  MESSAGE SENT SUCCESSFULY   -->
<?php 
					if($contact_message_sent){

				         echo " <div class='row'>   <h4 id='contat_message_sent'>&nbsp;&nbsp;Message sent sucessfully !</h4>    </div>";


				   	}

?>

		<form method="post">	
			<div class="row">
				<div class="col-md-4">
					<input type="email" placeholder="Email Address:" class="form-control" name="email" required >



			 	</div>

                          &nbsp;
			 	<div class="col-md-4">
					<input type="text" placeholder="Your Name:" class="form-control" name="name" required >
			 	</div>

                 <br> <br>        
			 </div>
                 
			 <div class="row">
                 <div class="col-md-8">
				<textarea rows=8 cols=104 style="font-size:18px;" placeholder="Enter Message Here" class="form-control" name="message"  required ></textarea>
                 </div>



                 	<div class="col-md-4">  
                 		<div class="container" id="addres-contact">
                 			<h3 style="color:white; text-decoration:underline;">Address: </h3>
	                 			<p >
	                 			    Somewhere @ Madni Chowk near Madni Masjid, Multan <br>
	                 			     Pho no: +923121600686 <br>
	                 			    Email: aliqureshi357989@gmail.com  
	                 		    </p>	
                 	    </div>

                 	</div>



             </div> 

              <br>
                <button class="btn btn-primary" name="contact-btn">Send Message</button>

              </form>  
		      </div>
		
	</div>

</body>
</html>

<?php  include("footer.php");   ?>

