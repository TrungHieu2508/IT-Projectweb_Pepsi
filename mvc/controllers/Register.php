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
            $role = 0; // Mặc định vai trò là khách hàng (role = 0)

            // Kiểm tra email trùng lặp
            $existingUser = $this->UserModel->GetUserByEmail($email);
            if ($existingUser) {
                $this->view("master1", [
                    "page" => "register",
                    "result" => -1  // Email đã tồn tại
                ]);
                return;
            }

            // Mã hóa mật khẩu
            // $password = password_hash($password, PASSWORD_DEFAULT);
            $kq = $this->UserModel->InsertData($name, $email, $password, $role);

            if ($kq) {
                $this->view("master1", [
                    "page" => "register",
                    "result" => 1  // Đăng ký thành công
                ]);
            } else {
                $this->view("master1", [
                    "page" => "register",
                    "result" => 0  // Đăng ký thất bại
                ]);
            }
        }
    }
}
?>