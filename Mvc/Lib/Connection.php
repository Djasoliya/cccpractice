<?php
class Lib_Connection{
    protected $conn;
    public function __construct(){
        $this->connect();
    }
    public function connect(){
        if(is_null($this->conn)){
            $this->conn = mysqli_connect("localhost","root", "","ccc_practice");
            if($this->conn === false){
                die("<h1>Error de conexión a la base de datos</h1>".mysql_connect_error());
            }
        }
        return $this->conn;
    }
    public function exec($query){
        try{
            $test = $this->connect()->query($query);
            if ($test === true) {
                echo '<script>alert("Data added successfully");</script>';
            } else {
                echo '<script>alert("Failed to add data. Please check your input.");</script>';
            }
            return $test;
        }
        catch(Exception $e){
            var_dump($e->getMessage());
        }
    }
}
?>