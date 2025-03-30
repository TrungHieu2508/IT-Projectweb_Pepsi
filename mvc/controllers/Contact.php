<?php
class Contact extends Controller {
    public $ContactModel;

    public function __construct() {
        $this->ContactModel = $this->model("ContactModel");
    }

    public function Show() {
        $this->view("master3", [
            "page" => "contact"
        ]);
    }

    public function Submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars(trim($_POST['fullname']));
            $phone = htmlspecialchars(trim($_POST['phone-number']));
            $email = htmlspecialchars(trim($_POST['email']));
            $address = htmlspecialchars(trim($_POST['address']));
            $reason = htmlspecialchars(trim($_POST['contact-reason']));
            $message = htmlspecialchars(trim($_POST['message']));

            $result = $this->ContactModel->InsertContact($name, $phone, $email, $address, $reason, $message);

            if ($result) {
                $this->view("master3", [
                    "page" => "contact",
                    "result" => "Your message has been sent successfully!"
                ]);
            } else {
                $this->view("master3", [
                    "page" => "contact",
                    "result" => "Failed to send your message. Please try again."
                ]);
            }
        }
    }
}
?>