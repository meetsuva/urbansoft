<?php
class Database
{
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "urbansoft";
    protected $connection;

    function __construct()
    {
        try {
            $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->database);
        } catch (Exception $ex) {
            echo "Database is not connected" . $ex->getMessage();
        }
    }
}

class getContentGrid extends Database
{
    function __construct()
    {
        parent::__construct();
        $queryFire = $this->connection->query("select blog_id,blog_title,blog_image,blog_meta from blogs");

        if ($queryFire->num_rows) {
            while ($fetchData = $queryFire->fetch_assoc()) {
                return $dataBundle = [
                    "id" => $fetchData['blog_id'],
                    "title" => $fetchData['blog_title'],
                    "meta" => $fetchData['blog_meta'],
                    "image" => $fetchData['blog_image']
                ];
            }
        } else {
        }
    }
}
