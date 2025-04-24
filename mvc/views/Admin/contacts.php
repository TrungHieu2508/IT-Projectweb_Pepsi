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
            <h3>Manage Contact</h3>
            <p>Contact List</p>
        </div>
        <div id="table__user">
            
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
						<th>Phone Number</th>
                        <th>Email</th>
						<th>Address</th>
						<th>Reason To Contact</th>
						<th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
				<?php if (isset($data['contacts']) && !empty($data['contacts'])): ?>
                <?php $counter = 1; ?>
                <?php foreach ($data['contacts'] as $contact): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo htmlspecialchars($contact['name']); ?></td>
                        <td><?php echo htmlspecialchars($contact['phone']); ?></td>
                        <td><?php echo htmlspecialchars($contact['email']); ?></td>
                        <td><?php echo htmlspecialchars($contact['address']); ?></td>
                        <td><?php echo htmlspecialchars($contact['reason']); ?></td>
                        <td><?php echo htmlspecialchars($contact['mess']); ?></td>
                        <td><?php echo htmlspecialchars($contact['date_sent']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No contacts found.</td>
                </tr>
            <?php endif; ?>
                </tbody>
            </table>
        </div>
        </div>
    </section>
    <script src="/Git/public/js/adorder.js"></script>
</body>
</html>
