<?php
// If $a is 10% higher than $b then $b is how much lower than $a
echo "Que : If 'A' is 10% higher than 'B' then 'B' is how much lower than 'A'. <br><br>";
$A;
$B=100;
echo "Assume B's value is : $B <br>";
echo "'A' is 10% higher than 'B' so : (B*10)/100 <br>";

$C = ($B*10)/100;
echo "Higher percentage value is : $C <br>";

$A = $B+$C;
echo "Value of A is : B's value + Higher Percentage = $A <br><br>";
lowerpercentage($A, $B);


function lowerpercentage($A ,$B){
    echo "'B' is 10 value is lower than the 'A' so find the percentage of it ";
    echo ": ((A-B)*100)/A";
    $D = (($A-$B)*100)/$A;
    echo "<br>Lower Percentage Value Is: $D %<br>";
    $x = number_format(9.0909090909091,3,".",",");
    echo "<br>Lower Percentage Value Is: $x %<br>";
}

?>