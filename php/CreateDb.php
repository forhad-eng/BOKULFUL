<?php

class Dbh
{
    public $server;
    public $user;
    public $pass;
    public $dbname;
    public $table;
    public $conn;

    public function connect($table)
    {
        $this->table = $table;
        $this->server = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'Bokulful';

        $this->conn = mysqli_connect($this->server,$this->user,$this->pass);

        if(!$this->conn)
        {
            die("Connection Failed: ".mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $this->dbname";

        if(mysqli_query($this->conn,$sql))
        {
            $this->conn = mysqli_connect($this->server,$this->user,$this->pass,$this->dbname);

            $sql = "CREATE TABLE IF NOT EXISTS $this->table
                    ( id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    product_name VARCHAR(30) NOT NULL,
                    product_price FLOAT,
                    product_image VARCHAR(100)
                    );";

            if(!mysqli_query($this->conn,$sql))
            {
                echo "Error in creating Table! ".mysqli_error($this->conn);
            }
        }else
        {
            return false;
        }
    }

    function get_SeedData($seed)
    {
        $sql = "SELECT * FROM $seed";
        $result = mysqli_query($this->conn,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            return $result;
        }
    }

    function get_MediData($Medi)
    {
        $sql = "SELECT * FROM $Medi";
        $result = mysqli_query($this->conn,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            return $result;
        }
    }
}