<?php

class DBVezerlo {
    private $conn = null;
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "oscar";

    function __construct() 
    {
        print("mysqli");
        $conn = $this->connectDB();
        if(!empty($conn))
        {
            $this->conn = $conn;
        }
    }
    function connectDB()
    {
        $conn = nysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }

    function executeSelectQuery($querry)
    {
        $result = mysqli_query($this->conn, $query);
        while($row=mysqli_fetch_assoc($result))
        {
            $resultset[] = $row;
        }

        if(!empty($resultset))
        {
            return $resultset;
        }
    }

}

?>