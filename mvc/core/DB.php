<?php
class DB
{
    public $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "project_pepsi";

    protected $result;

    function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }
}
?>
