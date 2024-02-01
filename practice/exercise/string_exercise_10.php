<?php
// Write a PHP function to calculate the factorial of a given number.

echo "Write a PHP function to calculate the factorial of a given number.<br>";
$num = 5;
function factorial($n) {
    if($n==0 || $n==1){
        return 1;
    }
    else{
        return $n*factorial($n-1);
    }
}
$factorialnum = factorial($num);
echo "Factorial of $num is : ".$factorialnum;


// $num1 = 4;
// function factorial($n) {
//     $fact = 1;
//     if($n==0 || $n==1){
//         return 1;
//     }
//     else{               
//         for($i=2;$i<=$n;$i++){
//             $fact *= $i;
//         }
//     }
//     return $fact;
// }

// $factorialnum = factorial($num1);
// echo "Factorial of $num1 is : ".$factorialnum;

?>