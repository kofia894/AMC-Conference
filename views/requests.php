<?php 
require('../Controllers/cart_controller.php');
require ('../Settings/core.php');
session_start();

$ip_add = $_SERVER['REMOTE_ADDR'];
if(isset($_SESSION['customer_id'])){
	$result = view_products_controller($ip_add, $_SESSION['customer_id']);
	$total =  sum_price_controller($ip_add,$_SESSION['customer_id']);
	$cart_count = count_cart_controller($_SESSION['customer_id']);
	
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

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
				 <li class="nav-item cta cta-colored "><a href="homepage.php" class="nav-link"><span class=""></span>Home</a></li>
	          
		
			  
	
					
				

		

	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../images/AMC.jpeg); background-position: center;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          
            <h1 class="mb-0 bread">My Requests</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th> Name/Speaker</th>				
						        <th>Quantity</th>		
								<th>Media</th>			        
						      </tr>
						    </thead>
						    <tbody>
								<?php 
								if(isset($_SESSION['customer_id'])){
									foreach($result as $cart){
										$image = $cart['product_image'];
										$image_src = "../images/products/".$image;
										$sum = $cart['qty'] * $cart['product_price'];
										echo"
											<tr class='text-center'>
											<form action = ../Actions/add_to_cart.php  method='post'>
												<input type='hidden' name='p_id' value =". $cart['product_id'].">
												<input type= 'hidden' name ='c_id'  value =". $_SESSION['customer_id'].">
												<td class='product-remove'><button class='btn  text-white' name='del_cart'><a href='#'><span class='ion-ios-trash'></span></a> </button></td>
											</form>

												
												
												<td class='image-prod'><img src=' $image_src' alt=''></td>
												
												<td class='product-name'>
													<h3>$cart[product_title]</h3>
													<p>$cart[product_desc]</p>
												</td>
												
												<td class='price'>GH₵ $cart[product_price]</td>
											
												<td class='quantity'>
													<div class='input-group mb-3'>
														<form  action='../Actions/manage_quantity_cart.php' method='post' class='d-flex ml-4'>
														<input type='hidden' name='p_id' value =". $cart['product_id'].">
														<input type='hidden' name='c_id' value =". $cart['c_id'].">
														<input type='number' name='p_qty' value =". $cart['qty'].">
														<button class='btn ml-4' name='update_qty' type='submit'>Update</button>
													</form>
													</div>
											</td>
												
											<td>  
											<p>₵ $sum</p>
											</td>
											</tr><!-- END TR-->
										";
									}
								}
								?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    	
			</div>
		</section>

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