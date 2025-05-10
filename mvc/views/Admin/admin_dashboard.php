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
							<a>Dashboard</a>
						</li>
						<img src="/Git/public/img/arrow.png" alt="arrow" style="width: 20px;">
						<li>
							<a class="active" href="/Git/Home">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<img src="/Git/public/img/neworder.png" alt="neworder">
					<span class="text">
					<h3><?php echo isset($data['orderCount']) ? $data['orderCount'] : 0; ?></h3>
					<p>New Order</p>
					</span>
				</li>
				<li>
					<img src="/Git/public/img/visitors.png" alt="visitors" style="width: 60px;">
					<span class="text">
					<h3><?php echo isset($data['userCount']) ? $data['userCount'] : 0; ?></h3>
						<p>User</p>
					</span>
				</li>
				<li>
					<img src="/Git/public/img/totalproduct.png" alt="totalproduct" style="width: 60px;">
					<span class="text">
					<h3><?php echo isset($data['productCount']) ? $data['productCount'] : 0; ?></h3>
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
    <?php if (isset($data['orders']) && !empty($data['orders'])): ?>
        <?php foreach ($data['orders'] as $order): ?>
            <tr>
                <td>
                    <img src="/Git/public/img/customer.png" alt="User Image">
                    <p><?php echo htmlspecialchars($order['name']); ?></p>
                </td>
                <td><?php echo htmlspecialchars($order['date_order']); ?></td>
                <td>
				<span class="status 
        <?php 
            echo $order['status'] === 'completed' ? 'completed' : 
                 ($order['status'] === 'pending' ? 'pending' : 'processing'); 
        ?>">
        <?php 
            echo $order['status'] === 'completed' ? 'Completed' : 
                 ($order['status'] === 'pending' ? 'Pending' : 'Processing'); 
        ?>
    </span>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">No recent orders found.</td>
        </tr>
    <?php endif; ?>
</tbody>
						
								
								
					</table>
				</div>
				<!-- <div class="todo">
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
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="/Git/public/js/dashboard.js"></script>
</body>
</html>