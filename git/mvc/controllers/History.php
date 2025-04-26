<?php
class History extends Controller {
    
    

    public function Show() {
         // Kiểm tra session để lấy user_id
         if (!isset($_SESSION['user_id'])) {
            header("Location: /Git/Login");
            exit();
        }
        $user_id = $_SESSION['user_id'];

        // Gọi model để lấy thông tin đơn hàng
        $orders = $this->model("OrderModel")->getOrdersByUserId($user_id);

        // Truyền dữ liệu đơn hàng đến view
        $this->view("master4", [
            "page" => "history",
            "orders" => $orders
        ]);
    }
}
?>