<?php
session_start(); // Bắt đầu session
require 'db.php'; // Kết nối cơ sở dữ liệu

$error = ''; // Biến lưu thông báo lỗi
$success = ''; // Biến lưu thông báo thành công

// Kiểm tra nếu người dùng đã gửi form đăng ký
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = 'user'; // Mặc định vai trò là 'user'

    // Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp nhau không
    if ($password !== $confirm_password) {
        $error = "Mật khẩu và xác nhận mật khẩu không khớp!";
    } else {
        // Kiểm tra xem tên đăng nhập đã tồn tại chưa
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user) {
            $error = "Tên đăng nhập đã tồn tại!";
        } else {
            // Mã hóa mật khẩu
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Thêm người dùng mới vào cơ sở dữ liệu
            $stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, :role)");
            $stmt->execute([
                'username' => $username,
                'password' => $hashed_password,
                'role' => $role
            ]);

            // Hiển thị thông báo thành công
            $success = "Đăng ký thành công! Bạn có thể <a href='login.php'>đăng nhập</a> ngay bây giờ.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1>Đăng ký</h1>
        <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
        <?php if ($success) echo "<p style='color:green;'>$success</p>"; ?>
        <form method="POST">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" name="username" required>
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" required>
            <label for="confirm_password">Xác nhận mật khẩu:</label>
            <input type="password" name="confirm_password" required>
            <button type="submit">Đăng ký</button>
        </form>
        <p>Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a></p>
    </div>
</body>
</html>