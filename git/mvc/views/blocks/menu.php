	<link rel="stylesheet" href="/Git/public/css/admain.css">




	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/Git/Admin" class="brand">
			<div class="smile"><img src="/Git/public/img/smile.png" alt="admin" ></div>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/Git/Admin">
					<img src="/Git/public/img/dashboard.png" alt="Dashboard" style="height: 30px; ">
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/Git/Admin/ManageUsers">
					<img src="/Git/public/img/customer.png" alt="Customer" style="height: 30px;">
					<span class="text">	Customer</span>
				</a>
			</li>
			<li>
				<a href="/Git/Admin/ManageProducts">
					<img src="/Git/public/img/product.png" alt="Product" style="height: 30px;">
					<span class="text">	Product</span>
				</a>
			</li>
			<li>
				<a href="/Git/Admin/ManageContact">
					<img src="/Git/public/img/order.png" alt="Contact" style="height: 30px;">
					<span class="text"> Contact</span>
				</a>
			</li>
            <li>
				<a href="/Git/Admin/ManageOrders">
					<img src="/Git/public/img/neworder.png" alt="Oder" style="height: 30px;">
					<span class="text"> Oder</span>
				</a>
			</li>
            
			
		</ul>
		<ul class="side-menu">
			<!-- <li>
				<a href="#">
					<img src="/Git/public/img/settings.png" alt="Settings" style="width: 40px;">
					<span class="text">Settings</span>
				</a>
			</li> -->
			<li>
				<a href="/Git/Logout" class="logout">
					<img src="/Git/public/img/logout.png" alt="Logout" style="width: 40px;" >
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<div class="menu"><img src="/Git/public/img/menuadmin.png" alt="menu" style="width: 20px;"></div>
			<a href="#" class="nav-link">Categories</a>
			<!-- <form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><img src="/Git/public/img/adminsearch.png" alt="search" style="width: 20px;"></button>
				</div>
			</form>
			
			<a href="#" class="notification">
				<div><img src="/Git/public/img/notification.png" alt="notification" style="width: 20px;"></div>
				<span class="num">8</span>
			</a> -->
			<a href="#" class="profile">
				<img src="/Git/public/img/customer.png">
				<span><?php echo isset($_SESSION['user']['name']) ? htmlspecialchars($_SESSION['user']['name']) : 'Admin'; ?></span>

			</a>
		</nav>
		<!-- NAVBAR -->

        <script src="/Git/public/js/dashboard.js"></script>
