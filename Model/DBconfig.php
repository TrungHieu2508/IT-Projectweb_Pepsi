<?php
class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $dbname = 'project_pepsi';

    private $conn = null;
    private $result = null;

    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            echo "Connection failed: " . $this->conn->connect_error;
            exit();
        } else {
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }

    // Thuc thi cau lenh truy van
    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    


    // Phuong thuc lay du lieu
    public function getData($table)
    {
        if($this->result){
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }
    
    // Phuong thuc lay toan bo du lieu
    public function getAllData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if ($this->num_rows()==0) {
            $data = 0;
        } else {
            while ($datas = $this->getData($table)) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    // Phuong thuc dem so ban ghi
    public function num_rows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    // Phuong thuc them du lieu
    public function InsertData($name,$email,$password)
    {
        $sql = "INSERT INTO user(id,name,email,password) VALUES(null,'$name','$email','$password')";
        return $this->execute($sql);
    }
    // Phuong thuc sua du lieu
    public function UpdateData($id,$name,$email,$password)
    {
        $sql = "UPDATE user SET name = '$name', email = '$email', password = '$password' WHERE id = '$id'";
        return $this->execute($sql);

    }
    
    // Phuong thuc xoa du lieu
    public function DeleteData($id)
    {
        $sql = "DELETE FROM user WHERE id = '$id'";
        return $this->execute($sql);
    }
}
?>