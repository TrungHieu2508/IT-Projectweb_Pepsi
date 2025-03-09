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
    
    
}
?>