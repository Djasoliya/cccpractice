<?php
// Write a PHP function to determine whether a given number is prime.

echo "Write a PHP function to determine whether a given number is prime.<br>";
$num = 17;
function primecheck($x){
    if($x==1){
        return 0;
    }
    for($i=2; $i<=$x/2; $i++){       //aftre the half value all have reminder
        if($x % $i == 0) {
            return 0;
        }
    }
    return 1;
}

$checking = primecheck($num);
if($checking==1){
    echo "$num is a Prime Number";
}
else{
    echo "$num number is not prime";
}
?>