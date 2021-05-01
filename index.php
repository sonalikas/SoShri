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
					<a href="customer/my_account.php">My Account</a>
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
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
					<li><a href="cart.php">Shoping Cart</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
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
<!-- slider start -->
<div class="container" id="slider">
	<div class="col-md-12">
		<div class="carousel slide" id="mycarousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="mycarousel" data-slide-to="1"></li><li data-target="mycarousel" data-slide-to="2"></li><li data-target="mycarousel" data-slide-to="3"></li><li data-target="mycarousel" data-slide-to="4"></li>
			</ol>
			<!-- start -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="admin_area/slider_images/1.jpg">
				</div>
				<div class="item ">
					<img src="admin_area/slider_images/2.jpg">
				</div>
				<div class="item ">
					<img src="admin_area/slider_images/3.jpg">
				</div>
				<div class="item ">
					<img src="admin_area/slider_images/4.jpg">
				</div>
				<div class="item ">
					<img src="admin_area/slider_images/5.jpg">
				</div>
			</div>
			<!-- end -->
			<a href="#mycarousel" class="left carousel-control" data-slide="prev"> 
				<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">previous</span>

			</a>
			<a href="#mycarousel" class="right carousel-control" data-slide="next"> 
				<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>

			</a>
		</div>
	</div>
	
</div>
<!-- slider end -->
<!-- 3 box start -->
<div id="advantage">
	<div class="container">
		<div class="same-height-row">
			<div class="col-sm-4">
				<div class="box same-height">
					<div class="icon">
						<i class="fa fa-heart"></i>
					</div>
					<h3><a href="#">Best price</a></h3>
					<p>somethig...</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box same-height">
					<div class="icon">
						<i class="fa fa-heart"></i>
					</div>
					<h3><a href="#">100%</a></h3>
					<p>somethig...</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box same-height">
					<div class="icon">
						<i class="fa fa-heart"></i>
					</div>
					<h3><a href="#">we love our customers</a></h3>
					<p>somethig...</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- 3 box end -->
<div id="hotbox">
	<div class="box">
		<div class="container">
			<div class="col-md-12">
				<h2>Latest This Week</h2>
			</div>
		</div>
	</div>
</div>
<!-- hotbox end -->

<div id="content"class="container">
	<div class="row">
			<div class="col-md-3 col-sm-6 center responsive"><!-- product 1 start -->
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/head.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php">Sony headphone </a></h3>
							<p class="price">INR 1999</p>
							<p class="buttons">
						 		<a href="details.php" class="btn btn-default">View details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shoping-cart"></i> Add to Cart</a>
							</p>
						</div>
					</div>
					
				</div><!-- product 1 end -->

					<div class="col-md-3 col-sm-6 center responsive"><!-- product 1 start -->
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/head.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php">Sony headphone </a></h3>
							<p class="price">INR 1999</p>
							<p class="buttons">
						 		<a href="details.php" class="btn btn-default">View details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shoping-cart"></i> Add to Cart</a>
							</p>
						</div>
					</div>
					
				</div><!-- product 1 end -->

					<div class="col-md-3 col-sm-6 center responsive"><!-- product 1 start -->
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/head.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php">Sony headphone </a></h3>
							<p class="price">INR 1999</p>
							<p class="buttons">
						 		<a href="details.php" class="btn btn-default">View details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shoping-cart"></i> Add to Cart</a>
							</p>
						</div>
					</div>
					
				</div><!-- product 1 end -->

					<div class="col-md-3 col-sm-6 center responsive"><!-- product 1 start -->
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/head.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php">Sony headphone </a></h3>
							<p class="price">INR 1999</p>
							<p class="buttons">
						 		<a href="details.php" class="btn btn-default">View details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shoping-cart"></i> Add to Cart</a>
							</p>
						</div>
					</div>
					
				</div><!-- product 1 end -->

					<div class="col-md-3 col-sm-6 center responsive"><!-- product 1 start -->
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/head.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php">Sony headphone </a></h3>
							<p class="price">INR 1999</p>
							<p class="buttons">
						 		<a href="details.php" class="btn btn-default">View details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shoping-cart"></i> Add to Cart</a>
							</p>
						</div>
					</div>
					
				</div><!-- product 1 end -->

					<div class="col-md-3 col-sm-6 center responsive"><!-- product 1 start -->
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/head.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php">Sony headphone </a></h3>
							<p class="price">INR 1999</p>
							<p class="buttons">
						 		<a href="details.php" class="btn btn-default">View details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shoping-cart"></i> Add to Cart</a>
							</p>
						</div>
					</div>
					
				</div><!-- product 1 end -->

					<div class="col-md-3 col-sm-6 center responsive"><!-- product 1 start -->
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/head.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php">Sony headphone </a></h3>
							<p class="price">INR 1999</p>
							<p class="buttons">
						 		<a href="details.php" class="btn btn-default">View details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shoping-cart"></i> Add to Cart</a>
							</p>
						</div>
					</div>
					
				</div><!-- product 1 end -->

					<div class="col-md-3 col-sm-6 center responsive"><!-- product 1 start -->
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/head.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3><a href="details.php">Sony headphone </a></h3>
							<p class="price">INR 1999</p>
							<p class="buttons">
						 		<a href="details.php" class="btn btn-default">View details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shoping-cart"></i> Add to Cart</a>
							</p>
						</div>
					</div>
					
				</div><!-- product 1 end -->
			
	</div>
</div>


<!-- footer start -->
<?php
include("includes/footer.php")
?>
<!-- footer end -->






 <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></body>
</html>