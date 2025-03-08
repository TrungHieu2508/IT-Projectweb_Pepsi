<?php
class ProductModel extends DB {
    public function execute($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        if ($params) {
            $stmt->bind_param(...$params);
        }
        $stmt->execute();
        $this->result = $stmt->get_result();
        return $this->result;
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $result = $this->execute($sql);
        $products = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }

        return $products;
    }
    public function getProductById($id) {
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $this->execute($sql);
        return $result->fetch_assoc();
    }
  
    
}
?>
