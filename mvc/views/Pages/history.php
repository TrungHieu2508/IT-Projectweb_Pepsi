<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Order </title>
    <link rel="stylesheet" href="/Git/public/css/history.css">
</head>
<body>
    <script src="/Git/public/js/order.js"></script>
    
    <div class="app">
        

        <div class="app__container">
            <div class="container__logo--header">
                <a href="/Git/Home"><img src="/Git/public/img/logoweb.png" alt="logo"></a>
            </div>
            <div class="container__backgroundPepsi">
                <img src="/Git/public/img/pepsilocation.png" alt="pepsi loaction">
            </div>
            <div class="container__pepsiText"><p>History Order</p></div>
            <a href="#"><button class="container__pepsiBtn">New offers and gifts</button></a>
            <div class="container__textHeader"><p> Ordered List </p></div>
            <div class="container__form-product">
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

                                <th>Order date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($data['orders']) && !empty($data['orders'])): ?>
        <?php foreach ($data['orders'] as $order): ?>
            <?php $i = 1; ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo htmlspecialchars($order['name']); ?></td>
                <td><?php echo htmlspecialchars($order['phone_number']); ?></td>
                <td><?php echo htmlspecialchars($order['address']); ?></td>
                <td><?php echo htmlspecialchars($order['amount']); ?></td>
                <td><?php echo htmlspecialchars($order['product']); ?></td>
                <td><?php echo htmlspecialchars($order['date_order']); ?></td>
                <td><?php echo htmlspecialchars($order['status']); ?></td>
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
        </div>
    </div>    
</body>
</html>