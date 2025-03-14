<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/Git/public/css/admin_dashboard.css">
</head>
<body>
    <div class="admin-dashboard-container">
        <h2>Admin Dashboard</h2>
        <p>Welcome, <?php echo $_SESSION['user']['name']; ?>. You are logged in as an admin.</p>
        
        <!-- Lựa chọn quản lý -->
        <div class="admin-options">
            <h3>Management Options</h3>
            <ul>
                <li><a href="/Git/Admin/ManageProducts">Quản lý sản phẩm</a></li>
                <li><a href="/Git/Admin/ManageUsers">Quản lý khách hàng</a></li>
            </ul>
        </div>
    </div>
</body>
</html>