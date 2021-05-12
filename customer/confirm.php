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
					<a href="../Checkout.php">My Account</a>
				</li>
				<li>
					<a href="../cart.php">Cart</a>
				</li>
				<li>
					<a href="../Login.php">Login</a>
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
						<a href="../index.php">Home</a>
					</li >
					<li>
						<a href="../shop.php">Shop</a>
					</li>
					<li class="active">
						<a href="../my_account.php">My Account</a>
					</li>
					<li>
						<a href="../cart.php">Shopping Cart</a>
					</li>
					<li>
						<a href="../about.php">About Us</a>
					</li>
					<li>
						<a href="../services.php">Services</a>
					</li>
					<li>
						<a href="../contactus.php">Contact Us</a>
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
				<li>My Account</li> 
				</ul>
		</div>
		<div class="col-md-3">
			<?php
			include("includes/sidebar.php");
			?>
		</div>

		<div class="col-md-9">
			<div class="box">
				<h1 align="center"> Please confirm your payment</h1>
				<form action="confirm.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Invoice Number</label>
						<input type="text" name="invoice_number" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Amount</label>
						<input type="text" name="amount" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>select Payment Mode</label>
						<select class="form-control" name="payment_mode">
							<option>Bank transfer</option>
							<option>Paypal</option>
							<option>PayuMoney</option>
							<option>PayTm</option>
							<option>PhonePay</option>
						</select>

						</div>

						<div class="form-group">
						<label>Transection Number</label>
						<input type="text" name="trfr_number" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Payment Date</label>
						<input type="text" name="date" class="form-control" required="">
					</div>
					<div class="text-center">
						<button type="submit" name="confirm_payment" class="btn btn-primary btn-lg"> Confirm Payment</button>
					</div>
				</form>
			</div>
		</div>




	</div>
</div>


<?php
include("includes/sidebar.php");
?>
</body>
</html>