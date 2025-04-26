<?php
class Logout extends Controller
{
    public function show()
    {
        
        // session_start();
        session_unset();
        session_destroy();

        // Chuyển hướng đến trang đăng nhập
        header("Location: /Git/Home");
        exit();
    }
}
?>