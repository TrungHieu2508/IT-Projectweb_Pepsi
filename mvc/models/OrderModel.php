<?php
class OrderModel extends DB{
    

    public function getOrders() {
        $sql = "SELECT id, name, phone_number, address, amount, product, date_order, status FROM orders";
        $result = $this->execute($sql);
        $orders = [];
    
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $orders[] = $row;
            }
        }
    
        return $orders;
    }
    public function insertOrder($user_id,$name, $phone_number, $address, $amount, $product, $date_order) {
        $sql = "INSERT INTO orders (user_id,name, phone_number, address, amount, product, date_order) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        // Sử dụng Prepared Statement để tránh SQL Injection
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("issssss", $user_id, $name, $phone_number, $address, $amount, $product, $date_order);
        
        if ($stmt->execute()) {
            return true; // Trả về true nếu thêm thành công
        } else {
            return false; // Trả về false nếu có lỗi
        }
    }
    public function updateOrderStatus($order_id, $status) {
        $sql = "UPDATE orders SET status = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $status, $order_id);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function countOrders() {
        $sql = "SELECT COUNT(*) AS total FROM orders"; // Đếm tất cả đơn hàng
        $result = $this->execute($sql);
        $row = $result->fetch_assoc();
        return $row['total']; // Trả về tổng số đơn hàng
    }
    public function getOrdersByUserId($user_id) {
        $sql = "SELECT * FROM orders WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
    
        $orders = [];
        while ($row = $result->fetch_assoc()) {
            $orders[] = $row;
        }
    
        return $orders;
    }
}
?>

