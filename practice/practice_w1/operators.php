<?php
// 1. Arithmetic Operators:
echo "------------------------Arithmetic Operators------------------------ <br>";
$a = 20;
$b= 3;
echo $a+$b."<br>";
echo $a*$b."<br>";
echo $a/$b."<br>";
echo $a-$b."<br>";
echo $a%$b."<br>";
echo exp($a)."<br><br>";

// 2. Assignment Operators:
echo "------------------------Assignment Operators------------------------ <br>";
$x=10;
$y=20;
$x=$y;
echo $x."<br>";

$a=3;
$b=7;
$b+=$a;
$b+=$a;
echo $b."<br>";

$a=2;
$b=9;
$b-=$a;
$b-=$a;
echo $b."<br>";

$a=5;
$b=2;
$b*=$a;
echo $b."<br>";

$a=13;
$b=17;
$b/=$a;
$b/=$a;
echo $b."<br>";

$a=7;
$b=30;
$b%=$a;
echo $b."<br><br>";

//3.Comparison Operators:
echo "------------------------Comparison Operators------------------------<br>";
$a=10;
$b=10;
if($a==$b){
    echo "a and b have same value<br>";   //it check only value 
}

$a="10.1";
$b=10.1;
if($a===$b){                                //it check both value and datatypes
    echo "a and b have same value add datatypes<br>";
}
else{
    echo "a and b don't have same value<br>";
}

$a=11;
$b=10;
if($a!==$b){
    echo "a and b don't have same value<br>";   
}

$a=11;
$b=10;
if($a>$b){
    echo "a is greater than the b<br>";   
}

$a=11;
$b=110;
if($a<$b){
    echo "a is less than the b<br>";   
}

$a=10;
$b=10;
if($a>=$b){
    echo "a is greater than or euale to the b<br>";   
}

$a=11;
$b=11;
if($a<=$b){
    echo "a is less than or euale to the b<br><br>";   
}

//4.Logical Operators:
echo "---------------------------Logical Operators---------------------------<br>";
$a=37;
$b=47;
if($a == 37 && $b == 47) {
    echo "both condition is true<br>";
}

$a=30;
$b=22;
if($a == 30 || $b !== 47) {
    echo "any one or both conditions can be true<br>";
}

$a=false;
if(!$a) {
    echo "here a's value is true <br><br>";
}

// 5.Increment and Decrement Operators:
echo "----------------Increment and Decrement Operators----------------<br>";
$i=0;
while($i<6){
    echo ++$i; 
}
echo "<br>";

$i=0;
while($i<6){
    echo $i++; 
}
echo "<br>";

$i=6;
while($i>0){
    echo --$i; 
}
echo "<br>";

$i=6;
while($i>0){
    echo $i--; 
}
echo "<br><br>";

//6. String Operators:
echo "--------------------------- String Operators---------------------------<br>";
$a="hello";
$b="world!";
echo $a.$b."<br>";

$a.=$b;
echo $a.=$b."<br><br>";

//7.Conditional (Ternary) Operator:
echo "------------------ Conditional (Ternary) Operator------------------<br>";
$x = 10;
echo ($x > 5) ? 'Yes' : 'No';
echo "<br><br>"; 

//8.Conditional (Ternary) Operator:
echo "---------------------------- Type Operators----------------------------<br>";
$a=20;
echo gettype($a)."<br>";
$b=20.357522;
echo gettype($b)."<br>";
$c="hello";
echo gettype($c)."<br>";
$d=array("hello", "world", "hii");
echo gettype($d)."<br>";

?>