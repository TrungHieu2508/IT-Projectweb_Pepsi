<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập và có vai trò admin không
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

echo "Chào mừng Admin!";
echo "<br><a href='dashboard.php'>Quay lại Dashboard</a>";
echo "<br><a href='logout.php'>Đăng xuất</a>";
?>