<?php   include("bs_files.php"); ?>

<html>
<head></head>
<style type="text/css">
#img-slider img {height: 500px; width: 100%;}
</style>
<body>
	        <!--  image gallaery slider -->

				<div id="img-slider" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#img-slider" data-slide-to="0" class="active"></li>
						    <li data-target="#img-slider" data-slide-to="1"></li>
						    <li data-target="#img-slider" data-slide-to="2"></li>
						    <li data-target="#img-slider" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="assets/img-slider-1.jpg" alt="img-slider">
						    </div>

						    <div class="item">
						      <img src="assets/img-slider-2.jpg" alt="img-slider">
						    </div>

						    <div class="item">
						      <img src="assets/img-slider-3.jpg" alt="img-slider">
						    </div>

						    <div class="item">
						      <img src="assets/img-slider-4.jpeg" alt="img-slider">
						    </div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#img-slider" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#img-slider" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
				</div>

				<!--  image gallaery slider -->
	        

</body>
</html>