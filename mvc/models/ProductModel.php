<?php
class ProductModel extends DB {
    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
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
}
?>
