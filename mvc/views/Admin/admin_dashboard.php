<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="/Git/public/css/admain.css">

	<title>AdminHub</title>
</head>
<body>



		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<img src="/Git/public/img/arrow.png" alt="arrow" style="width: 20px;">
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<img src="/Git/public/img/order.png" alt="neworder">
					<span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<img src="/Git/public/img/visitors.png" alt="visitors" style="width: 60px;">
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<img src="/Git/public/img/totalproduct.png" alt="totalproduct" style="width: 60px;">
					<span class="text">
						<h3>24</h3>
						<p>Total product</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="/Git/public/img/sieunhanden.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="/Git/public/img/sieunhando.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="/Git/public/img/sieunhanhong.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="/Git/public/img/sieunhanxanh.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="/Git/public/img/sieunhanxanhla.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							
						</li>
						<li class="completed">
							<p>Todo List</p>
							
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							
						</li>
						<li class="completed">
							<p>Todo List</p>
							
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="/Git/public/js/dashboard.js"></script>
</body>
</html>