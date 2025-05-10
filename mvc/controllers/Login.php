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
        //Kiểm tra nếu người dùng đã đăng nhập
        if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
            if ($_SESSION['user']['role'] == 1) {
                
                header("Location: /Git/Admin/Show");
            } else {
               
                header("Location: /Git/Home");
            }
            exit();
        }
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

              // Kiểm tra người dùng và xác minh mật khẩu
              if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                $_SESSION['user_logged_in'] = true;
                $_SESSION['user_id'] = $user['id']; // Lưu user_id vào session


                
                if ($user['role'] == 1) {
                    header("Location:/Git/Admin/Show");
                } else {
                    header("Location:/Git/Home");
                }
                exit();
            } else {
                  
            $_SESSION['error'] = "Invalid email or password.";
            header("Location: /Git/Login"); 
            exit();
              
            }
            
        }
        else {
            header("Location: /Git/Login");
            exit();
        }
    }
}
?>