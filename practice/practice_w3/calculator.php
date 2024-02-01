<?php
class calculator{
    public function add($a, $b){
        return $a+$b;
    }
    public function substract($a, $b){
        return $a-$b;
    }
    public function multiply($a, $b){
        return $a*$b;
    }
    public function divide($a, $b){
        if($b!=0){
            return $a/$b;
        }
        else{
            echo "Enter the value of 'b' is greater than 0";
        }
    }
}
$calculate = new calculator();
echo $calculate->add(8,2)."<br>";
echo $calculate->substract(2,8)."<br>";
echo $calculate->multiply(7,8)."<br>";
echo $calculate->divide(10,5)."<br>";
echo $calculate->divide(10,0)."<br>";
?>