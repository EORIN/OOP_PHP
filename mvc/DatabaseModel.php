<?php


class DatabaseModel
{
    public $conn;

    /**
     * Database constructor.
     * @param $conn
     */
    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '6032397', 'mvc');
    }


    public function select(){
        $sql = 'SELECT * FROM mvctbl';
        return $this->conn->query($sql);
    }
    public function add($u, $e, $p){
        $sql = "INSERT INTO mvctbl (Id, Username, Password, Email) VALUES (id, '" . $u . "', '" . $e . "', '" . $p . "');";
        $this->conn->query($sql);
    }

}