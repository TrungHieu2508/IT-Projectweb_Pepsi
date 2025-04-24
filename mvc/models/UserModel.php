<?php
class UserModel extends DB
{
    // Hàm thực thi câu lệnh SQL
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

    // Lấy danh sách người dùng
    public function getUsers()
    {
        $sql = "SELECT id, name, email FROM user"; // Đã bỏ WHERE hidden = 0
        $result = $this->execute($sql);
        $user = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $user[] = $row;
            }
        }

        return $user;
    }

    // Thêm người dùng mới
    public function InsertData($name, $email, $password, $role)
    {
        $sql = "INSERT INTO user (name, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $password, $role);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // Tìm người dùng theo email
    public function GetUserByEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email = ?";
        $result = $this->execute($sql, ["s", $email]);
        return $result->fetch_assoc();
    }

    // Tìm người dùng theo ID
    public function getUserById($id)
    {
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $this->execute($sql, ["i", $id]);
        return $result->fetch_assoc();
    }

    // Xóa người dùng
    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>
