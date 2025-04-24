<?php
class Buy extends Controller {
    public $productModel;

    public function __construct() {
        // Gọi model ProductModel
        $this->productModel = $this->model("ProductModel");
    }

    public function Show() {
        // Lấy danh sách sản phẩm từ ProductModel
        $products = $this->productModel->getAllProducts();

        // Truyền dữ liệu sản phẩm vào view
        $this->view("master3", [
            "page" => "buy",
            "product" => $products
        ]);
    }
}
?>