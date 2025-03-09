<?php
// Thông tin kết nối cơ sở dữ liệu
$host = 'localhost';       // Địa chỉ máy chủ MySQL (thường là localhost)
$dbname = 'php_login_system'; // Tên cơ sở dữ liệu bạn đã tạo
$username = 'root';        // Tên người dùng MySQL (mặc định là root nếu dùng XAMPP)
$password = '';            // Mật khẩu MySQL (mặc định là trống nếu dùng XAMPP)

try {
    // Tạo kết nối đến cơ sở dữ liệu bằng PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Thiết lập chế độ báo lỗi để PDO ném ra ngoại lệ khi có lỗi
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thông báo kết nối thành công (bạn có thể bỏ dòng này nếu không cần)
    echo "Kết nối cơ sở dữ liệu thành công!";
} catch (PDOException $e) {
    // Bắt lỗi nếu kết nối thất bại và hiển thị thông báo lỗi
    die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
}
?>