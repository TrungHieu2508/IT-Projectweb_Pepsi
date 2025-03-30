<?php
class Order extends Controller {
    public function Submit() {
        // Kiểm tra trạng thái đăng nhập
        if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
            // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
            header('Location: /Git/Login');
            exit;
        }

       
    }
}
?>