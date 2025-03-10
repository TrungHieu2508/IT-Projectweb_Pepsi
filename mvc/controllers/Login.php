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
        $this->view("master1", [
            "page" => "login"
        ]);
    }
    public function KHLogin()
    {
        if (isset($_POST['btnLogin'])) {
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);
            $user = $this->UserModel->GetUserByEmail($email);

            if ($user && $user['password'] === $password) {
                $_SESSION['user'] = $user;
                header("Location: /Git/IT-Projectweb_Pepsi/Home");
            } else {
                echo "Invalid email or password.";
            }
        }
    }
}
?>