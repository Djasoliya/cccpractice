<?php
class Lib_Connection{
    protected $conn;
    public function __construct(){
        $this->connect();
    }
    public function connect(){
        if(is_null($this->conn)){
            $this->conn = mysqli_connect("localhost","root", "","ccc_practice");
            if ($this->conn === false) {
                die("<h3 style='color: red;'>ERROR: Could not connect. "
                    . mysqli_connect_error() . "</h3>");
            }
        }
        return $this->conn;
    }
    public function exec($query){
        try{
            $test = $this->connect()->query($query);
                return $test;
        }
        catch(Exception $e){
            var_dump($e->getMessage());
        }
    }
}
?>