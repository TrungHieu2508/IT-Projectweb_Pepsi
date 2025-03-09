<?php
class UserModel extends DB
{
    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    public function InsertData($name, $email, $password)
    {
        // Sử dụng prepared statement để tránh SQL injection
        $sql = "INSERT INTO user (name, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function GetUserByEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        
        return $user;
    }
}



?>