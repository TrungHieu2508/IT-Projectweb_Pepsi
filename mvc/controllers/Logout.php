<?php
class Logout extends Controller
{
    public function show()
    {
        // Hủy bỏ session
        session_start();
        session_unset();
        session_destroy();

        // Chuyển hướng đến trang đăng nhập
        header("Location: /Git/IT-Projectweb_Pepsi/Home");
        exit();
    }
}
?>