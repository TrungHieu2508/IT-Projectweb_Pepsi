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
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
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
    public function updateProduct($id, $name, $size, $calories, $total_fat, $sodium, $total_carbohydrates, $sugars, $protein, $value_fat, $value_sodium, $value_carbohydrate, $components, $img = null) {
        if ($img) {
            // Nếu có ảnh mới, cập nhật cả ảnh
            $sql = "UPDATE products 
                    SET name = ?, size = ?, calories = ?, total_fat = ?, sodium = ?, total_carbohydrates = ?, sugars = ?, protein = ?, value_fat = ?, value_sodium = ?, value_carbohydrate = ?, components = ?, img = ? 
                    WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sdiidiiiiiibsi", $name, $size, $calories, $total_fat, $sodium, $total_carbohydrates, $sugars, $protein, $value_fat, $value_sodium, $value_carbohydrate, $components, $img, $id);
        } else {
            // Nếu không có ảnh mới, chỉ cập nhật các trường khác
            $sql = "UPDATE products 
                    SET name = ?, size = ?, calories = ?, total_fat = ?, sodium = ?, total_carbohydrates = ?, sugars = ?, protein = ?, value_fat = ?, value_sodium = ?, value_carbohydrate = ?, components = ? 
                    WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sdiidiiiiiibs", $name, $size, $calories, $total_fat, $sodium, $total_carbohydrates, $sugars, $protein, $value_fat, $value_sodium, $value_carbohydrate, $components, $id);
        }
    
        return $stmt->execute();
    }
public function deleteProduct($id) {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        return true; // Xóa thành công
    } else {
        return false; // Xóa thất bại
    }
}
    
    
  
    
}
?>
