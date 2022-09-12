<?php 

// require('../Controllers/product_controller.php');
require ('../Settings/core.php');
require('../Controllers/request_controller.php');


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/main.css">
  </head>
  <body class="goto-here">
		
    	
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="homepage.php">PENT TV MEDIA</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">         
			  <?php 
					if(isset($_SESSION['user_role']) == 1){
						echo'<li class="nav-item"> <a class="nav-link" href="../Admin/index.php">Admin Side</a></li> ';
					}
				?>
	          <li class="nav-item cta cta-colored "><a href="requests.php" class="nav-link"><span class="">Your Requests</span></a></li>
			  <li class="nav-item cta cta-colored "><a href="aps-en.php" class="nav-link"><span class="#">Aps Eric Nyamekye Messages</span></a></li>


	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->



    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../images/AMC.jpeg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Request Your Conference Messages</h1>
	              
	            </div>

	          </div>
	        </div>
	      </div>

	     
	    	</div>
    </section>

    

		

    <section class="ftco-section">
	<div class="container mb-5">


		</div>
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	
            <h2 class="mb-4">Requests</h2>
          </div>
        </div>   		
    	</div>
	
		
    	<div class=" cards container d-flex justify-content-center" style= "margin-left:auto; margin-right:auto; width:90%;">

    		<div class="row container  d-flex justify-content-center p-3 ">
				
				<div class=" mb-5 pr-lg-5" >
					<div class="card " style="width: 18rem; min-height: 450px;">
						<div class="container">
							<img src="../images/audio.png" class="card-img-top img-fluid" alt="...">
						</div>
						<div class="card-body">
							<h5 class="card-title"> Audio Messages</h5>
							<p class="card-text">Request All conference audio messages</p>
							 <a href="audioreq.php" class="btn btn-primary">Request here</a>
						</div>
					</div>
				</div>

				<div class=" mb-5 pr-lg-5" >
					<div class="card " style="width: 18rem; height: 450px;">
						<div class="container">
						<img src="../images/video.jpg" class="card-img-top img-fluid" alt="...">
						</div>
						<div class="card-body mt-4">
							<h5 class="card-title"> Video Messages</h5>
							<p class="card-text">Request All conference Video messages</p>
							<a href="videoreq.php" class="btn btn-primary"> Request here</a>
						</div>
					</div>
				</div>

			
			</div>

    	</div>
    </section>
		
		

 

    <hr>



		
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
          
            
            </div>
          </div>
        
          </div>
      
        </div>
        
       
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>