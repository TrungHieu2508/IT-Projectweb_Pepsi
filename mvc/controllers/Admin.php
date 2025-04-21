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

    public function Show() {
        if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) {
            $this->view("master2", [
                "admin" => "admin_dashboard"
            ]);
        } else {
            header("Location: /Git/Home");
            exit();
        }
    }

   



    public function ManageProducts() {
        $this->view("master2", [
            "admin" => "manage_product"
        ]);
    }

    public function ManageOrders() {
        $this->view("master2", [
            "admin" => "manage_order"
        ]);
    }
    public function ManageContact() {
        $contact = $this->ContactModel->getAllContacts();
        $this->view("master2", [
            "admin" => "contacts",
            "contacts" => $contact
        ]);
   
    }
    public function ManageUsers() {
        $user = $this->UserModel->getAllUsers();
        $this->view("master2", [
            "admin" => "customer",
            "users" => $user
        ]);
    }
    
    

   

}
?>