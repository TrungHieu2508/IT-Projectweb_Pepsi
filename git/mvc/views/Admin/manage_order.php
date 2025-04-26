<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="/Git/public/css/manage_order.css">
</head>
<body>
        <div id="container">
        <div class="head">
            <h3>Manage Orders</h3>
            <p>Order List</p>
        </div>
        <div id="table__user">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Amount</th>
                        <th>Product</th>
                        <th>Date Order</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php if (isset($data['orders']) && !empty($data['orders'])): ?>
            <?php foreach ($data['orders'] as $order): ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo htmlspecialchars($order['name']); ?></td>
                    <td><?php echo htmlspecialchars($order['phone_number']); ?></td>
                    <td><?php echo htmlspecialchars($order['address']); ?></td>
                    <td><?php echo htmlspecialchars($order['amount']); ?></td>
                    <td><?php echo htmlspecialchars($order['product']); ?></td>
                    <td><?php echo htmlspecialchars($order['date_order']); ?></td>
                    <td><?php echo htmlspecialchars($order['status']); ?></td>
                    <td>
                <form action="/Git/Admin/UpdateStatus" method="post">
                    <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                    <select name="status" onchange="this.form.submit()">
                        <option value="pending" <?php echo $order['status'] == 'pending' ? 'selected' : ''; ?>>Chưa xử lý</option>
                        <option value="processing" <?php echo $order['status'] == 'processing' ? 'selected' : ''; ?>>Đang xử lý</option>
                        <option value="completed" <?php echo $order['status'] == 'completed' ? 'selected' : ''; ?>>Đã xử lý</option>
                    </select>
                </form>
            </td>
                    
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">No orders found.</td>
            </tr>
        <?php endif; ?>
                    </tbody>
            </table>
        </div>
        </div>
</body>
</html>