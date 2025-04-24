<?php
class Buy extends Controller {
    public $productModel;

    public function __construct() {
        
        $this->productModel = $this->model("ProductModel");
    }

    public function Show() {
        
        $products = $this->productModel->getAllProducts();

        
        $this->view("master3", [
            "page" => "buy",
            "product" => $products
        ]);
    }
}
?>