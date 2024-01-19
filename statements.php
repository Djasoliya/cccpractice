<?php
echo "------------- ------ if statement---------------------<br>";
$a=22;
if($a>18){
    echo "you can drive<br><br>";
}

echo "---------------- nested if statement-----------------<br>";
$b=90;
if($b<100){
    if($b>50){
        echo "this product price is between 50 and 100<br><br>";
    }
}

echo "-------------------if else statement------------------<br>";
$age=10;
if($age<18){
    echo "you can not drive<br><br>";
}
else{
    echo "you can drive<br><br>";
}

echo "--------------------elseif statement------------------<br>";
$marks=80;
if( $marks<=35){
    echo "you are failed";
}
elseif($marks<=50){
    echo "you are passed with grade D<br><br>";
}
elseif($marks<=70){
    echo "you are passed with grade C<br><br>";
}
elseif($marks<=90){
    echo "you are passed with grade B<br><br>";
}
else{
    echo "you are passed with grade A<br><br>";
}

echo "---------------nested if else statement--------------<br>";
$p=1200;
if($p<1500){
    if($p>500){
        echo "here price of p is between 500 to 1500";
    }
    else{
        echo "price of p is less than 500";
    }
}
else{
    echo "price of p is greater than 1500";
}
echo "<br><br>";

// Switch Case :
echo "---------------- Switch Case----------------<br>";
$day = "tuesday";
switch($day){
    
    case "monday":
    echo "today is monday";
    break;
    
    case "tuesday":
    echo "today is tuesday";
    break;

    case "wednesday":
    echo "today is wednesday";
    break;

    case "thursday":
    echo "today is thursday";
    break;
    
    case "friday":
    echo "today is friday";
    break;
    
    case "seturday":
    echo "today is seturday";
    break;
    
    case "sunday":
    echo "today is sunday";
    break;

    default :
    echo "your input is invalid";
} 
echo "<br>";

$color = "black";
switch($color){
    case "red" :
        echo "this color is 'red' ";
        break;
    
    case "blue" :
        echo "this color is 'blue' ";
        break;

    case "yellow" :
        echo "this color is 'yellow' ";
        break;
    
    case "black" :
        echo "this color is 'black' ";
        break;

    case "gray" :
        echo "this color is 'gray' ";
        break;

    default :
        echo "your input is invalid";
        break;
}


?>