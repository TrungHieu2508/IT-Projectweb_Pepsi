<?php
class Admin extends Controller {
    public $ProductModel;
    public $UserModel;
    public $ContactModel;

    public function __construct(){
        $this->ProductModel = $this->model("ProductModel");
        $this->UserModel = $this->model("UserModel");
        $this->ContactModel = $this->model("ContactModel");
    }

    private function checkAdmin() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 1) {
            header("Location: /Git/Home"); // Chuyển hướng nếu không phải admin
            exit();
        }
    }
    public function Show() {
        $this->checkAdmin(); 
            $this->view("master2", [
                "admin" => "admin_dashboard"
            ]);
       
    }

   



    public function ManageProducts() {
        $this->checkAdmin();
        $products = $this->ProductModel->getAllProducts();
        $this->view("master2", [
            "admin" => "manage_product",
            "products" => $products
        ]);
    }

    public function ManageOrders() {
        $this->checkAdmin();
        $this->view("master2", [
            "admin" => "manage_order"
        ]);
    }
    public function ManageContact() {
        $this->checkAdmin();
        $contact = $this->ContactModel->getContacts();
        $this->view("master2", [
            "admin" => "contacts",
            "contacts" => $contact
        ]);
   
    }
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