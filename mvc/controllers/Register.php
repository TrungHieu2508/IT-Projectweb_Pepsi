<?php
class Register extends Controller
{
    public $UserModel;
    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }
    public function Show()
    {
        $this->view("master1", [
            "page" => "register"
        ]);
    }
    public function KHRegister()
    {
        if (isset($_POST['btnRegister'])) {

            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            // $password = password_hash($password, PASSWORD_DEFAULT);
            $kq = $this->UserModel->InsertData($name, $email, $password);
          

            $this->view("master1", [
                "page" => "register",
                "result" => $kq
            ]);
        }
    }
}
