<?php
class Database{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "urbansoft";
    private $connection;

    function __construct()
    {
        try{
            $this->connection = new mysqli($this->servername,$this->username,$this->password,$this->database);
        }
        catch(Exception $ex){
            echo "Database is not connected".$ex->getMessage();
        }
    }
}
?>