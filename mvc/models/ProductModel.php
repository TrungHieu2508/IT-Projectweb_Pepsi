<?php
class ProductModel extends DB {


    // public function getAllProducts() {
    //     $sql = "SELECT * FROM products";
    //     $result = $this->execute($sql);
    //     $products = [];

    //     if ($result) {
    //         while ($row = $result->fetch_assoc()) {
    //             $products[] = $row;
    //         }
    //     }

    //     return $products;
    // }
    public function getProducts() {
        $sql = "SELECT id, name, img
        FROM products ";
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
    public function getNextProductId($current_id) {
        $sql = "SELECT MIN(id) as id FROM products WHERE id > ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $current_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row ? $row['id'] : null;
    }

    public function getPreviousProductId($current_id) {
        $sql = "SELECT MAX(id) as id FROM products WHERE id < ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $current_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row ? $row['id'] : null;
    }

    public function getFirstProductId() {
        $sql = "SELECT MIN(id) as id FROM products";
        $result = $this->execute($sql);
        $row = $result->fetch_assoc();
        return $row ? $row['id'] : null;
    }

    public function getLastProductId() {
        $sql = "SELECT MAX(id) as id FROM products";
        $result = $this->execute($sql);
        $row = $result->fetch_assoc();
        return $row ? $row['id'] : null;
    }
    public function countProducts() {
        $sql = "SELECT COUNT(*) AS total FROM products"; 
        $result = $this->execute($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    
    
  
    
}
?>
