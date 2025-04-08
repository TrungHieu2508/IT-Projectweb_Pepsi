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
    public function Detail($id) {
        $product = $this->ProductModel->getProductById($id);
        
        $this->view("master1", [
            "page" => "detail",
            "product" => $product,
            "next_id" => $this->ProductModel->getNextProductId($id),
            "prev_id" => $this->ProductModel->getPreviousProductId($id)
        ]);
    }
    
    public function Next($current_id) {
        $next_id = $this->ProductModel->getNextProductId($current_id);
        if (!$next_id) {
            // Nếu không có sản phẩm tiếp theo, quay về sản phẩm đầu tiên
            $next_id = $this->ProductModel->getFirstProductId();
        }
        header("Location: /Git/Product/Detail/" . $next_id);
    }
    
    public function Previous($current_id) {
        $prev_id = $this->ProductModel->getPreviousProductId($current_id);
        if (!$prev_id) {
            // Nếu không có sản phẩm trước đó, chuyển đến sản phẩm cuối cùng
            $prev_id = $this->ProductModel->getLastProductId();
        }
        header("Location: /Git/Product/Detail/" . $prev_id);
    }
    

    
}
?>
