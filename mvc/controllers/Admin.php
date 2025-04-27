<?php
class Admin extends Controller {
    public $ProductModel;
    public $UserModel;
    public $ContactModel;
    public $OrderModel;

    public function __construct(){
        $this->ProductModel = $this->model("ProductModel");
        $this->UserModel = $this->model("UserModel");
        $this->ContactModel = $this->model("ContactModel");
        $this->OrderModel = $this->model("OrderModel");
    }

    private function checkAdmin() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 1) {
            header("Location: /Git/Home"); 
            exit();
        }
    }
    public function Show() {

        $this->checkAdmin(); 
        $userCount = $this->UserModel->countUsers();
        $productCount = $this->ProductModel->countProducts();
        $orderCount = $this->OrderModel->countOrders();
        $orders = $this->OrderModel->getOrders();


            $this->view("master2", [
                "admin" => "admin_dashboard",
                "userCount" => $userCount,
                "productCount" => $productCount,
                "orderCount" => $orderCount,
                "orders" => $orders
            ]);
       
    }

   


//*********Manage Product***********/
    public function ManageProducts() {
        $this->checkAdmin();
        $products = $this->ProductModel->getProducts();
        $this->view("master2", [
            "admin" => "manage_product",
            "products" => $products
        ]);
    }

    public function EditProduct($id = null) {
        $this->checkAdmin();
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $id = $_POST['id']; // Lấy ID từ form
            $name = $_POST['name'];
            $size = $_POST['size'];
            $calories = $_POST['calories'];
            $total_fat = $_POST['total_fat'];
            $sodium = $_POST['sodium'];
            $total_carbohydrates = $_POST['total_carbohydrates'];
            $sugars = $_POST['sugars'];
            $protein = $_POST['protein'];
            $components = $_POST['components'];
            $img = isset($_FILES['img']['tmp_name']) && $_FILES['img']['tmp_name'] ? file_get_contents($_FILES['img']['tmp_name']) : null;
    
            // Gọi model để cập nhật sản phẩm
            $result = $this->model("ProductModel")->updateProduct($id, $name, $size, $calories, $total_fat, $sodium, $total_carbohydrates, $sugars, $protein, $components, $img);
    
            if ($result) {
                echo "<script>
                    alert('Product updated successfully!');
                    window.location.href = '/Git/Admin/ManageProducts';
                </script>";
            } else {
                echo "<script>
                    alert('Failed to update product.');
                    window.location.href = '/Git/Admin/EditProduct/$id';
                </script>";
            }
        } else {
            // Hiển thị form chỉnh sửa
            $product = $this->model("ProductModel")->getProductById($id);
            $this->view("master2", [

                "admin" => "edit_product",
                "product" => $product
            ]);
        }
    }
    
    

    
  
   

    //*********Manage Product***********/
    public function ManageOrders() {
        $this->checkAdmin();
        $orders = $this->OrderModel->getOrders();
        $this->view("master2", [
            "admin" => "manage_order",
            "orders" => $orders
        ]);
    }
    public function UpdateStatus() {
        $this->checkAdmin();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $order_id = $_POST['order_id'];
            $status = $_POST['status'];
    
            // Gọi model để cập nhật trạng thái
            $result = $this->model("OrderModel")->updateOrderStatus($order_id, $status);
    
            if ($result) {
                header("Location: /Git/Admin/ManageOrders"); // Chuyển hướng về trang quản lý đơn hàng
                exit();
            } else {
                echo "Failed to update status.";
            }
        }

    }
    public function Delete($order_id) {
        $this->checkAdmin();
        $result = $this->OrderModel->deleteOrder($order_id);

        if ($result) {
            echo "<script>
                alert('Order deleted successfully!');
                window.location.href = '/Git/Admin/ManageOrders';
            </script>";
        } else {
            echo "<script>
                alert('Failed to delete order.');
                window.location.href = '/Git/Admin/ManageOrders';
            </script>";
        }
    }
    
  
    
    

    //*********Manage Contact***********/
    public function ManageContact() {
        $this->checkAdmin();
        $contact = $this->ContactModel->getContacts();
        $this->view("master2", [
            "admin" => "contacts",
            "contacts" => $contact
        ]);
   
    }
    


    //*********Manage User***********/
    public function ManageUsers() {
        $this->checkAdmin();
        $user = $this->UserModel->getUsers();
        $this->view("master2", [
            "admin" => "customer",
            "users" => $user
        ]);
    }
    
    public function DeleteUser($id) {
        $this->checkAdmin();
    
        $result = $this->UserModel->deleteUser($id);
        if ($result) {
            $_SESSION['message'] = "User deleted successfully.";
        } else {
            $_SESSION['message'] = "Failed to delete user.";
        }
    
        header("Location: /Git/Admin/ManageUsers");
        exit();
    }
    
    

   

}
?>