<?php
class ContactModel extends DB {
    public function InsertContact($name, $phone, $email, $address, $reason, $message ,$date) {
        $sql = "INSERT INTO contact (name, phone, email, address, reason, mess, date_sent ) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssssss", $name, $phone, $email, $address, $reason, $message,$date );
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
    public function getContacts() {
        $sql = "SELECT id ,name, phone, email, address, reason, mess, date_sent FROM contact"; 
        $result = $this->conn->query($sql);
        $contacts = [];
    
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $contacts[] = $row;
            }
        }
    
        return $contacts;
    }
}

?>