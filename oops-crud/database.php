<?php

class database
{
    private $host;
    private $dbusername;
    private $dbpasword;
    private $dbname;

    protected function connect()
    {
        $this->host = 'localhost';
        $this->dbusername = 'root';
        $this->dbpasword = '';
        $this->dbname = 'crud';

        $con = new mysqli($this->host, $this->dbusername, $this->dbpasword, $this->dbname);

        return $con;
    }

}

class query extends database
{
    public function getData()
    {
        $sql = "SELECT * FROM user";
        $result = $this->connect()->query($sql);
        // print_r($result);
        if ($result->num_rows > 0) {
            $arr = []; // declare a array
            while ($row = $result->fetch_assoc()) {
                // print_r($row);
                $arr[] = $row;
                // print_r($arr); // pushing the data into array

            }
            return $arr;
        } else {
            return 0;
        }
    }
}
