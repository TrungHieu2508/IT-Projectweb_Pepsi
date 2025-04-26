<?php
class Order extends Controller {
    public $OrderModel;

    public function __construct() {
        $this->OrderModel = $this->model("OrderModel");
    }
    

  public function Show(){
    $this->view("master3", [
      "page"=>"order"
    ]);
  }
  
  public function Insert() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $phone_number = $_POST['phone-number'];
        $address = $_POST['address'];
        $amount = $_POST['product-quantity'];
        $product = $_POST['product']; // Hoặc lấy từ giỏ hàng nếu cần
        $date_order = date('Y-m-d'); 

        // Gọi model để thêm dữ liệu
        $orderModel = $this->model("OrderModel");
        $result = $orderModel->insertOrder($name, $phone_number, $address, $amount, $product, $date_order);

        if ($result) {
            $this->view("master3", [
                "page" => "order",
                "message" => "Order inserted successfully!"
            ]);
        } else {
            $this->view("master3", [
                "page" => "order",
                "message" => "Failed to insert order."
            ]);
        }
    }
  }
}
    

?>