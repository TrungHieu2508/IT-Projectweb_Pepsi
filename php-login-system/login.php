<?php
session_start(); // Bắt đầu session
require 'db.php'; // Kết nối cơ sở dữ liệu

// Kiểm tra nếu người dùng đã đăng nhập
if (isset($_SESSION['username'])) {
    // Hiển thị thông báo chào mừng và tên đăng nhập
    $welcome_message = "Chào mừng, " . $_SESSION['username'] . "!";
}

// Kiểm tra nếu người dùng đã gửi form đăng nhập
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    // Nếu tìm thấy người dùng và mật khẩu khớp
    if ($user && password_verify($password, $user['password'])) {
        // Lưu thông tin người dùng vào session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Hiển thị thông báo chào mừng và tên đăng nhập
        $welcome_message = "Chào mừng, " . $_SESSION['username'] . "!";

        // Chuyển hướng đến trang dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        // Hiển thị thông báo lỗi nếu đăng nhập thất bại
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1>Đăng nhập</h1>
        <?php if (isset($welcome_message)) echo "<p style='color:green;'>$welcome_message</p>"; ?>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" name="username" required>
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" required>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
