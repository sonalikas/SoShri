<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<center>
			<img src="customer_images/s_logo.png" class="img-responsive">
		</center>
		<br>
		<h3 align="center" class="panel-title">Name:SoShri</h3>
	</div>
<div class="panel-body">
	<ul class="nav nav-pills nav-stacked">
		<li class="<?php if(isset($_GET[my_order])){echo "active";} ?>">
				<a href="my_account.php?my_order"><i class="fa fa-list"></i> My Order</a>
		</li>
		<li class="<?php if(isset($_GET[pay_offline])){echo "active";} ?>">
				<a href="my_account.php?pay_offline"><i class="fa fa-bolt"></i> Pay Offline</a>
		</li>
		<li class="<?php if(isset($_GET[my_address])){echo "active";} ?>">
				<a href="my_account.php?my_address"><i class="fa fa-user"></i> My Address</a>
		</li>
		<li class="<?php if(isset($_GET[edit_account])){echo "active";} ?>">
				<a href="my_account.php?edit_account"><i class="fa fa-pencil"></i> Edit Account</a>
		</li>
		<li class="<?php if(isset($_GET[change_password])){echo "active";} ?>">
				<a href="my_account.php?change_password"><i class="fa fa-user"></i> Change Password</a>
		</li>
		<li class="<?php if(isset($_GET[my_wishlist])){echo "active";} ?>">
				<a href="my_account.php?my_wishlist"><i class="fa fa-bolt"></i> My WishList</a>
		</li>
		</li>
		<li class="<?php if(isset($_GET[delete_account])){echo "active";} ?>">
				<a href="my_account.php?delete_account"><i class="fa fa-trace-o"></i> Delete Account</a>
		</li>
		</li>
		<li class="<?php if(isset($_GET[logout])){echo "active";} ?>">
				<a href="my_account.php?logout"><i class="fa fa-sign-out"></i> Logout</a>
		</li>
		</ul>
	</div>
</div>