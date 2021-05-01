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
					</li >
					<li>
						<a href="shop.php">Shop</a>
					</li>
					<li>
						<a href="checkout.php">My Account</a>
					</li>
					<li class="active">
						<a href="cart.php">Shopping Cart</a>
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
				 <a href="shop.php">Shop</a></li> 
				 <li>
				 Cart</li>
				</ul>
		</div>
		
		<div class="col-md-9" id="cart">
			<div class="box">
				<form action="cart.php" method="post" enctype="multipart-form-data">
					<h1>Shopping Cart</h1>
					<p class="text-muted"> Currently you have 3 item(s) in your cart
					</p>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2">Product</th>
									<th>Quantity
									</th>
									<th>Unit Price</th>
									<th>Size</th>
									<th colspan="1">Delete</th>
									<th colspan="1">Sub Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="admin_area/product_images/sony.jpg" style="width: 50px;"></td>
									<td>Product name Headphone</td>
									<td>2</td>
									<td>INR 1999</td>
									<td>Large</td>
									<td><input type="checkbox" name="remove[]"></td>
									<td>2999</td>
								</tr>

								<tr>
									<td><img src="admin_area/product_images/sony.jpg" style="width: 50px;"></td>
									<td>Product name Headphone</td>
									<td>2</td>
									<td>INR 1999</td>
									<td>Large</td>
									<td><input type="checkbox" name="remove[]"></td>
									<td>2999</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="5">Total</th>
									<th colspan="2">INR 2999</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="box-footer">
						<div class="pull-left">
							<a href="index.php" class="btn btn-default">
								<i class="fa fa-chevron-left"></i> ontinue SHopping
							</a>
							
						</div>
						<div class="pull-right">
							<button class="btn btn-default" type="submit" name="update" value="update cart">
								<i class="fa fa-refresh"> Update Cart</i>
							</button>
							<a href="checkout.php" class="btn btn-primary"> Proceed to checkout<i class="fa fa-chevron-right"></i></a>
							
						</div>
					</div>
				</form>
				
			</div>

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

	<div class="col-md-3">
		<div class="box" id="order-summary">
			<div class="box-header">
				<h3>Order Summary</h3>
			</div>
			<p class="text-muted">
				Shipping and additional costs are calculated based on the values you have enterd
			</p>
			<div class="table-responsive">
				<table class="table">
				<tbody>
					<tr>
						<td>Order Subtotal</td>
						<th>INR 2999</th>
					</tr>
					<tr>
						<td>shipping and handling</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Tax</td>
						<td>INR 0</td>
					</tr>
					<tr class="total">
						<td> Total</td>
						<th>INR 2999

						</th>
					</tr>
				</tbody>
			    </table>
			</div>
		</div>
		
	</div>

</div>
</div>

<?php
include("includes/footer.php");
?>

	
</body>

</html>