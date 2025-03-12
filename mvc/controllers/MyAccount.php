<?php
class MyAccount extends Controller {
  public function Show(){

    // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!isset($_SESSION['user'])) {
            header("Location: /Git/IT-Projectweb_Pepsi/Login");
            exit();
        }
        
        $this->view("master1", [
        "page"=>"myaccount"
    ]);
  }
}
    

?>