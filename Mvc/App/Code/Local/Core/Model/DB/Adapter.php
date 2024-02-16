<?php
class Core_Model_DB_Adapter
{
    public $config = [
        "host" => "localhost",
        "password" => "",
        "user" => "root",
        "database" => "ccc_practice"
    ];
    public $connect = null;
    public function connect()
    {
        if (is_null($this->connect)) {
            $this->connect = mysqli_connect(
                $this->config["host"],
                $this->config["user"],
                $this->config["password"],
                $this->config["database"]
            );
        }
    }
    public function fetchAll($query)
    {
        
    }
    public function fetchPairs($query)
    {

    }
    public function fetchOne($query)
    {

    }
    public function fetchRow($query)
    {
        $rows = [];
        $this->connect();
        $sql = mysqli_query($this->connect, $query);
        
        while($row = mysqli_fetch_assoc($sql)){
            $rows = $row;
        }
        return $rows;
    }
    public function insert($query)
    {

    }
    public function update($query)
    {

    }
    public function delete($query)
    {

    }
    public function query($query)
    {

    }
}
?>