<?php
echo "---------------- for loop-----------------<br>";
for($a=0;$a<10;$a++){
    echo $a." ";
}
echo "<br><br>";
for($b=9;$b>=0;$b--){
    if($b==5){
        continue;
    }
    echo $b;
}
echo "<br><br>";

echo "----------------while loop----------------<br>";
$i=0;
while($i<10){
    echo $i;
    $i++;
}
echo "<br><br>";
$j=7;
while($j>0){
    if($j==4){
        break;
    }
    echo $j;
    $j--;
}
echo "<br><br>";

echo "----------------foreach loop----------------<br>";
$x=array("hello", "world",3,2.47);
foreach($x as $y){
    echo $y." ";
}
echo "<br><br>";

$product = array("scooter"=>50000, "honda"=>100000, "activa"=>80000);
foreach($product as $x){
    echo " $x <br>";
}
echo "<br>";
foreach($product as $x=>$y){
    echo " $x:$y <br>";
}

echo "<br><br>";
$i=0;
$iteration = 6;
for($i; $i<$iteration;$i++){
    $j=1;
    for($j;$j<$iteration-$i;$j++){
            echo $j;
    }
    echo "<br>";
}
        
echo "<br><br>";
$i=4;
for($i; $i>0;$i--){
    $j=1;
    for($j;$j<5;$j++){
        echo $j;
        if($i==$j){
            break;
        }
    }
    echo "<br>";
}
//reference
$n=10;
for($i=1;$i<=$n;$i++){

    for($j=1;$j<=$n;$j++){
        if($j<=($n+1)-$i){
        echo $j." ";
        }
    }
    echo "<br>";
}
?>