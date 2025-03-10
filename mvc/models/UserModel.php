<?php
class UserModel extends DB
{
    public function execute($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        if ($params) {
            $stmt->bind_param(...$params);
        }
        $stmt->execute();
        $this->result = $stmt->get_result();
        return $this->result;
    }

    public function InsertData($name, $email, $password)
    {
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
        $result = $this->execute($sql, ["s", $email]);
        $user = $result->fetch_assoc();
        return $user;
    }
}
?>