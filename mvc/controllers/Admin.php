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
    
    

    
  
   

    //*********Manage Product***********/
    public function ManageOrders() {
        $this->checkAdmin();
        $orders = $this->OrderModel->getOrders();
        $this->view("master2", [
            "admin" => "manage_order",
            "orders" => $orders
        ]);
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