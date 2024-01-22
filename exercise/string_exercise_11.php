<?php
// Implement the Bubble Sort algorithm to sort an array. (Do not use array sort function)
// $arrayToSort = [64, 34, 25, 12, 22, 11, 90];

echo "Implement the Bubble Sort algorithm to sort an array. (Do not use array sort function) arrayToSort = [64, 34, 25, 12, 22, 11, 90]<br>";

function bubblesort(&$arr,$size){
    // $sizeofarr = sizeof($arr);
    for($i = 0; $i<$size; $i++){
        for($j = 0; $j<$size-$i-1; $j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j]= $arr[$j + 1];
                $arr[$j + 1]=$temp;
            }
        }
    }
}

$arrayToSort = array(64, 34, 25, 12, 22, 11, 90);
$sizeofarr = sizeof($arrayToSort);
bubblesort($arrayToSort,$sizeofarr);
for($i = 0; $i < $sizeofarr; $i++){
    echo $arrayToSort[$i]." ";
}

?>