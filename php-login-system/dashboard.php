<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

echo "Chào mừng, " . $_SESSION['username'] . "!";
echo "<br>Vai trò của bạn: " . $_SESSION['role'];

// Hiển thị các liên kết tùy theo vai trò
if ($_SESSION['role'] == 'admin') {
    echo "<br><a href='admin.php'>Trang quản trị</a>";
}
echo "<br><a href='logout.php'>Đăng xuất</a>";
?>