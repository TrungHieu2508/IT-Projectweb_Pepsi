<?php
class Admin extends Controller {
    public $ProductModel;
    public $UserModel;

    public function __construct(){
        $this->ProductModel = $this->model("ProductModel");
        $this->UserModel = $this->model("UserModel");
    }

    public function Show() {
        // Kiểm tra xem người dùng đã đăng nhập và có vai trò là admin (role = 1)
        if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) {
            $this->view("master2", [
                "admin" => "admin_dashboard"
            ]);
        } else {
            // Nếu không phải admin, chuyển hướng đến trang khách hàng
            header("Location: /Git/IT-Projectweb_Pepsi/Home");
            exit();
        }
    }
    // public function ManageProducts() {
    //     $products = $this->ProductModel->getAllProducts();
    //     $this->view("master2", [
    //         "admin" => "manage_products",
    //         "products" => $products
    //     ]);
    // }

    public function ManageUsers() {
        $user = $this->UserModel->getAllUsers();
        $this->view("master2", [
            "admin" => "ManageUsers",
            "users" => $user
        ]);
    }public function EditUser($id) {
        // Xử lý logic sửa người dùng ở đây
    }

    public function DeleteUser($id) {
        // Xử lý logic xóa người dùng ở đây
    }

}
?>