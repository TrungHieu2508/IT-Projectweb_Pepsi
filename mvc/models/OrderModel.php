<?php
class OrderModel extends DB{
    

    public function getOrders() {
        $sql = "SELECT name, phone_number, address, amount, product, date_order, status FROM orders";
        $result = $this->execute($sql);
        $orders = [];
    
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $orders[] = $row;
            }
        }
    
        return $orders;
    }

    public function countOrders() {
        $sql = "SELECT COUNT(*) AS total FROM orders"; // Đếm tất cả đơn hàng
        $result = $this->execute($sql);
        $row = $result->fetch_assoc();
        return $row['total']; // Trả về tổng số đơn hàng
    }
}
?>

