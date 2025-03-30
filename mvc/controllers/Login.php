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

              // Kiểm tra người dùng và xác minh mật khẩu
              if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                $_SESSION['user_logged_in'] = true;

                // Kiểm tra vai trò và chuyển hướng
                if ($user['role'] == 1) {
                    header("Location:/Git/Admin/Show");
                } else {
                    header("Location:/Git/Home");
                }
                exit();
            } else {
                  // Lưu thông báo lỗi vào session
            $_SESSION['error'] = "Invalid email or password.";
            header("Location: /Git/Login"); // Chuyển hướng về trang login
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