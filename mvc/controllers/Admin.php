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
                "admin" => "Admin_dashboard"
            ]);
        } else {
            // Nếu không phải admin, chuyển hướng đến trang khách hàng
            header("Location: /Git/Home");
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
    }
    public function EditUser($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $name = $_POST['name'];
            $email = $_POST['email'];
    
            // Gọi model để cập nhật thông tin người dùng
            $result = $this->UserModel->updateUser($id, $name, $email);
    
            if ($result) {
                // Nếu cập nhật thành công, chuyển hướng về trang quản lý người dùng
                header("Location: /Git/Admin/ManageUsers");
            } else {
                // Nếu thất bại, hiển thị thông báo lỗi
                echo "Cập nhật người dùng thất bại.";
            }
        } else {
            // Lấy thông tin người dùng hiện tại để hiển thị trong form
            $user = $this->UserModel->getUserById($id);
            $this->view("master2", [
                "admin" => "EditUser",
                "users" => $user
            ]);
        }
    }
    

    public function DeleteUser($id) {
        // Xử lý logic xóa người dùng ở đây
    }

}
?>