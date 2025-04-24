<?php

class OrderModel extends Db
{
    public function getAllOrders()
    {
        $sql = "SELECT * FROM orders";
        return $this->select($sql);
    }

    public function getOrderById($id)
    {
        $sql = "SELECT * FROM orders WHERE id = ?";
        return $this->selectOne($sql, [$id]);
    }

    public function addOrder($data)
    {
        return $this->insert('orders', $data);
    }

    public function updateOrder($id, $data)
    {
        return $this->update('orders', $data, ['id' => $id]);
    }

    public function deleteOrder($id)
    {
        return $this->delete('orders', ['id' => $id]);
    }


?>