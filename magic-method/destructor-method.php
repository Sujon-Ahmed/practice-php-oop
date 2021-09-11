<?php
    // the real example with mysql connect and close
class abc{
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect();
    }
    public function hello(){
        echo "Hello everyone </br>";
    }
    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}
$obj = new abc();

?>