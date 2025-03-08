<?php
class Product extends Controller {
    public $ProductModel;
    
    public function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }

    public function Show(){
        $products = $this->ProductModel->getAllProducts();

        $this->view("master1", [ 
            "page" => "product",
            "product" => $products 
        ]);
    }
    
    public function Detail($id){
        $products = $this->ProductModel->getProductById($id);

        $this->view("master1", [
            "page" => "chitiet",
            "product" => $products
        ]);
    }
}
?>
