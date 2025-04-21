<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<!-- My CSS -->
	<link rel="stylesheet" href="/Git/public/css/customer.css">

	<title>AdminHub</title>
</head>
<body>


        <!--MAIN-->
        <div id="container">
        <div class="head">
            <h3>Manage Users</h3>
            <p>User List</p>
        </div>
        <div id="table__user">
		<?php if (isset($data['users']) && !empty($data['users'])): ?>

            <table>
                <thead>
                    <tr>
						<th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
					<?php $i = 1; ?>
				<?php foreach ($data['users'] as $user): ?>
                            <tr>
								<td><?php echo $i++; ?></td>
                                <td><?php echo $user['name']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td>
                                    <a href="/Git/Admin/EditUser/<?php echo $user['id']; ?>">Edit</a>
                                    <a href="/Git/Admin/DeleteUser/<?php echo $user['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
			<?php else: ?>
                <p>No users found.</p>
            <?php endif; ?>
        </div>
        </div>
    </section>
    <script src="/Git/public/js/customer.js"></script>
</body>
</html>
