<?php
// Write a PHP program that prints the numbers from 1 to 100. For multiples of three, 
// print "Fizz" instead of the number, and for multiples of five, print "Buzz". 
// For numbers that are multiples of both three and five, print "FizzBuzz".

echo "Write a PHP program that prints the numbers from 1 to 100. For multiples of three <br>";
$i=0;
while($i<=100) {
    if ($i % 3 == 0){
        echo $i." ";
    }
    $i++;
}
// echo "<br>";
// for($i=0;$i<=100;$i+=3){
//     echo $i." ";
// }
// echo "<br><br>";
// $x = range(0, 100);
// function mulofthree($a){
//     return $a%3==0;
// }
// print_r(array_filter($x, "mulofthree"));
echo "<br><br>";

echo "Print 'Fizz' instead of the number, and for multiples of five, print 'Buzz' <br>";
for($i=0;$i<=100;$i++){
    if($i%3==0){
        echo $i."Fizz ";
    }
    if($i%5==0){
        echo $i."Buzz ";
    }
}
// $x = range(0, 100);
// function fizzandbuzz($a){
//     if($a%3==0){
//         echo $a."Fizz";
//     }
//     if($a%5==0){
//         echo $a."Buzz";
//     }
// }
// print_r(array_filter($x, "fizzandbuzz"));
echo "<br><br>";

echo "For numbers that are multiples of both three and five, print 'FizzBuzz' <br>";
for($i=0;$i<=100;$i++){
    if($i%3==0 && $i%5==0){
        echo $i."FizzBuzz ";
    }
}
// $x = range(0, 100);
// function fizzbuzz($a){
//     if($a%3==0 && $a%5==0){
//         echo $a."FizzBuzz  ";
//     }
// }
// print_r(array_filter($x, "fizzbuzz"));
echo "<br><br>";




?>