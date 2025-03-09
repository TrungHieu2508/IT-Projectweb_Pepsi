<?php
class UserModel extends DB
{
    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    public function InsertData($name,$email,$password)
    {
        $sql = "INSERT INTO user(id,name,email,password) VALUES(null,'$name','$email','$password')";
        return $this->execute($sql);
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