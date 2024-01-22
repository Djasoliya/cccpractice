<?php
// Write a PHP function to generate the Fibonacci sequence up to a specified number of terms.

echo "Write a PHP function to generate the Fibonacci sequence up to a specified number of terms.<br>";
$num = 5;
function fibonacci($n) {
    $n1 = 0;
    $n2 = 1;
    $cd=0;
    while($cd<$n){
        echo " ". $n1;
        $n3=$n1+$n2;
        $n1= $n2;
        $n2=$n3;
        $cd+=1;
    }
}
$fibonaccinum = fibonacci($num);
echo $fibonaccinum;
?>