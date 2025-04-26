<?php
class Buy extends Controller {
    public $productModel;

    public function __construct() {
        
        $this->productModel = $this->model("ProductModel");
    }

    public function Show() {
        
        $products = $this->productModel->getProducts();

        
        $this->view("master3", [
            "page" => "buy",
            "product" => $products
        ]);
    }
}
?>