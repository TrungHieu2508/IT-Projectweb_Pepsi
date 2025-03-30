<?php
class ContactModel extends DB {
    public function InsertContact($name, $phone, $email, $address, $reason, $message) {
        $sql = "INSERT INTO contact (name, phone, email, address, reason, mess) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $phone, $email, $address, $reason, $message);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>