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
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Amount</th>
                        <th>Product</th>
                        <th>Date Order</th> <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7</td>
                        <td>linh</td>
                        <td>0123456789</td>
                        <td>Hồ Chí Minh</td>
                        <td>1 thùng</td>
                        <td>pepsi vị chanh ko calo</td>
                        <td>2024-04-24</td> <td>
                            <select class="order-status" onchange="updateOrderStatus(7, this.value)">
                                <option value="pending">Chưa xử lý</option>
                                <option value="processing">Đang xử lý</option>
                                <option value="completed">Đã xử lý</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
        </div>
</body>
</html>