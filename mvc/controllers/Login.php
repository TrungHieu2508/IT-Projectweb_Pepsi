<?php
class Login extends Controller
{
    public $UserModel;
    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }
    public function Show()
    {
        $this->view("master2", [
            "page" => "login"
        ]);
    }
    public function KHLogin()
    {
        if (isset($_POST['btnLogin'])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $user = $this->UserModel->GetUserByEmail($email);

            // Hiển thị thông tin của mảng email
            echo '<pre>';
            print_r($user);
            echo '</pre>';
            // header("Location:/Home");
            

            

                  
        }
    
}
}
?>