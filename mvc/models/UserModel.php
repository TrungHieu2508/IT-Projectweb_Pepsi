<?php
class UserModel extends DB
{
    
    
    public function getUsers() {
    $sql = "SELECT id,name, email FROM user "; 
    $result = $this->execute($sql);
    $user = [];

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $user[] = $row;
        }
    }

    return $user;
}

    public function InsertData($name, $email, $password, $role)
    {
        $sql = "INSERT INTO user (name, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $password, $role);
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
    public function getUserById($id) {
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $this->execute($sql, ["i", $id]);
        return $result->fetch_assoc();
    }
    public function deleteUser($id) {
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result; 
    }
    public function countUsers() {
        $sql = "SELECT COUNT(*) AS total FROM user"; 
        $result = $this->execute($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

}
?>