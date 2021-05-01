<!DOCTYPE html>
<html>
<head>
	<title>SoShri Store</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- font awesome -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
	<!-- topbar start-->
<div id="top">
	<div class="container">
		<div class="col-md-6 offer">
			<a href="#" class="btn btn-success btn-sm"> Welcome </a>
			<a href="#">Shopping Cart Total Price: INR 100, Total Item 2</a>
		</div>
		<div class="col-md-6">
			<ul class="menu">
				<li>
					<a href="Customer_registration.php">Registration</a>
				</li>
				<li>
					<a href="Checkout.php">My Account</a>
				</li>
				<li>
					<a href="cart.php">Cart</a>
				</li>
				<li>
					<a href="Login.php">Login</a>
				</li>
			</ul>
			
		</div>
	</div>
	
</div>
<!-- topbar end-->
<!-- nav bar start -->
<div class="navbar navbar-default" id="navbar">
	<div class="container">
		<div class="navbar-default">
			<a class="navbar-brand home" href="index.php">
				<img src="images/log.png" alt="SoShri" class="hidden-xs">
				<img src="images/sl.png" alt="SoShri" class="visible-xs">
			</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
				<span class="sr-only">Toggle Navigation</span>
				<i class="fa fa-align-justify"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"></span>
					<i class="fa fa-search"></i>
				</button>
		</div>
		<!-- navbar menu star -->
		<div class="navbar-collapse collapse" id="navigation">
			<div class="padding-nav">
				<ul class="nav navbar-nav navbar-left">
					<li >
						<a href="index.php">Home</a>
					</li class="active">
					<li>
						<a href="shop.php">Shop</a>
					</li>
					<li>
						<a href="checkout.php">My Account</a>
					</li>
					<li>
						<a href="cart.php">Shoping Cart</a>
					</li>
					<li>
						<a href="about.php">About Us</a>
					</li>
					<li>
						<a href="services.php">Services</a>
					</li>
					<li>
						<a href="contactus.php">Contact Us</a>
					</li>
				</ul>
			</div>
			<a href="cart.php" class="btn btn-primary navbar-btn right">
				<i class="fa fa-shoping-cart"></i>
				<span>4 items In Cart</span>
			</a>
			<div class="navbar-collapse collapse right">
				<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
					<span class="sr-only"> Toggle Search
					</span>
					<i class="fa fa-search"></i>
				</button>
				
			</div>
			
			<div class="collapse clearfix" id="search">
				<form class="navbar-form" method="get" action="result.php">
					<div class="input-group">
						<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
						<span class="input-group-btn">
						<button type="submit" value="Search" name="search" class="btn btn-primary" >
						<i class="fa fa-search"></i> </button>
						</span>
					</div>
				</form>
			</div>
		</div>
		<!-- navbar menu end -->
	</div>
	
</div>
<!-- navbar end -->
<!-- breadcrumb start -->
<div id="content">
	<div class="container">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li>
					<!-- <a href="shop.php">Shop</a>-->Shop</li> 
				</ul>
		</div>
		<div class="col-md-3">
			<?php
			include("includes/sidebar.php");
			?>
		</div>


		<div class="col-md-9">
			<div class="row" id="productmain">
				<div class="col-sm-6">
					<div id="mainimage">
						
						<div class="carousel slide" id="mycarousel" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="mycarousel" data-slide-to="0" class="active"></li>
								<li data-target="mycarousel" data-slide-to="1"></li>
								<li data-target="mycarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner"><!-- start-->
								<div class="item active">
									<center>
										<img src="admin_area/product_images/sony.jpg" class="img-responsive">
									</center>
								</div>

								<div class="item">
									<center>
										<img src="admin_area/product_images/sony.jpg" class="img-responsive">
									</center>
								</div>

								<div class="item">
									<center>
										<img src="admin_area/product_images/sony.jpg" class="img-responsive">
									</center>
								</div>
							</div><!-- end-->
							<a href="#mycarousel" class="left carousel-control" data-slide="prev"> 
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only"> previouse</span></a>
							
							<a href="#mycarousel" class="right carousel-control" data-slide="next">
							 <span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only"> next</span></a>	
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="box">
						<h1 class="text-center">Sony headphones</h1>
						<form action="details.php" method="post" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-5 control-label"> product Quantity</label>
								<div class="col-md-7">
									<select name="product_qty" class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-5 control-label">Color</label>	
								<div class="col-md-7"> <select name="product_color" class="form-control">
									<option>Select Color</option>
									<option>Blue</option>
									<option>Black</option>
									<option>Sky blue</option>
									<option>gray</option>
								</select></div>							
							</div>

							<div class="form-group">
								<label class="col-md-5 control-label"> product Size</label>	
								<div class="col-md-7"> <select name="product_size" class="form-control">
									<option>Select Size</option>
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
									<option>Extra Large</option>
								</select></div>							
							</div>

							<p class="price">INR 1999</p>
							<p class="text-center buttons"> <button class=" btn btn-primary" type="submit"><i class="fa fa-shoping-cart"></i> Add to cart </button></p>
						</form>
					</div>
					<div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/sony.jpg" class="img-responsive">
						</a>
					</div>
					<div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/sony.jpg" class="img-responsive">
						</a>
					</div><div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/sony.jpg" class="img-responsive">
						</a>
					</div>
				</div>
			</div>
			<div class="box" id="details">
				<h4>Product Details</h4>
				<p>
					1. Active Noise Cancelling technology. Significant noise reduction for travel, work and anywhere in between. Advanced active noise reduction technology quells airplane cabin noise, city traffic or a busy office, makes you focus on what you want to hear,enjoy your music, movies and videos. The noise cancellation function can work well both in wire and wireless mode.<br>

2. Proprietary 45mm large-aperture drivers. Deep, accurate bass response. The Active Noise Cancelling around-ear headphones from COWIN give you crisp, powerful sound and quiet that helps you enjoy your music better. The goal that provide Customers with better sound quality, is our constant pursuit.
				</p>
				<h4> Size</h4>
				<ul>
				<li>Small</li>
				<li>Large</li>
				<li>Extra Large</li>
				</ul>
			</div>
			
			<!--releted product start-->

			<div id="row" same-height-row>
				<div class="col-md-12 col-sm-6">
					<div class="box same-height headline">
						<h3 class="text-center"> You Also Like These Products</h3>
						
					</div>
				</div>
				<div class="center-responsive col-md-3">
					<div class="product same-height">
						<a href="details.php">
							<img src="admin_area/product_images/sony.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php"> Product Name</a></h3>
							<p class="price">INR 1999</p>
						</div>
					</div>
					
				</div>

				<div class="center-responsive col-md-3">
					<div class="product same-height">
						<a href="details.php">
							<img src="admin_area/product_images/sony.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php"> Product Name</a></h3>
							<p class="price">INR 1999</p>
						</div>
					</div>
					
				</div>
				

				<div class="center-responsive col-md-3">
					<div class="product same-height">
						<a href="details.php">
							<img src="admin_area/product_images/sony.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php"> Product Name</a></h3>
							<p class="price">INR 1999</p>
						</div>
					</div>
					
				</div>
				

				<div class="center-responsive col-md-3">
					<div class="product same-height">
						<a href="details.php">
							<img src="admin_area/product_images/sony.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php"> Product Name</a></h3>
							<p class="price">INR 1999</p>
						</div>
					</div>
					
				</div>
				<!-- product end -->
				
			</div><!--releted product end-->

		</div>



	</div>
</div>
<!-- breadcrumb end -->



<!-- footer -->
<?php
include("includes/footer.php");
?>

</body>
</html>