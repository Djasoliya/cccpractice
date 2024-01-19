<?php
echo "----------------------Array Creation and Initialization----------------------<br>";
echo "1. Creates a new array.<br>";
$a= array("red", "blue", "black");
print_r($a);
echo "<br>";
$b= array("red"=>3, "blue"=>4, "black"=>9);
print_r($b);
echo "<br><br>";

echo "2. Merges two or more arrays.<br>";
print_r(array_merge($a,$b));
echo "<br><br>";

echo "3. Creates an array by using one array for keys and another for its values.<br>";
$students=array("harry","dj","dhruv");     //it take the key for combination
$marks=array("33","78","90");              //it take the value for combination
print_r(array_combine($students,$marks));
echo "<br><br>";

echo "4. Creates an array containing a range of elements.<br>";
$number =  range(2,6);
print_r($number);
echo "<br>";
$number =  range(2,10,3);
print_r($number);
echo "<br><br>";

echo "-----------------------------Array Modification------------------------------<br>";
echo "5. Adds one or more elements to the end of an array.<br>";
array_push($students,"harsh","umesh");
print_r($students);
echo "<br><br>";

echo "6.Removes the last element from an array.<br>";
array_pop($students);
print_r($students);
echo "<br><br>";

echo "7.Adds one or more elements to the beginning of an array.<br>";
array_unshift($students, "divyesh");
print_r($students);
echo "<br><br>";

echo "8.Removes the first element from an array.<br>";
array_shift($students);
print_r($students);
echo "<br><br>";

echo "9.Removes a portion of the array and replaces it with something else.<br>";
array_splice($students, 1, 2, "hello");
print_r($students);
echo "<br>";
$x = array("hello", "world", "by");
array_splice($students, 1, 3, $x);
print_r($students);
echo "<br><br>";

echo "--------------------------------Array Access---------------------------------<br>";
echo "10.Counts the number of elements in an array.<br>";
$things = array("fruits"=>array("mango","orenge"),"cars"=>array("bmw","audi"));
echo "normal count :". count($things)."<br>";
echo "recursive count :". count($things,1);              
echo "<br><br>";

echo "11.Alias of count().<br>";
echo sizeof($things);       //recursive count is same like 'count' function
echo "<br><br>";

echo "12.Checks if the given key or index exists in the array.<br>";
if(array_key_exists("black", $b)){
    echo "key is exists";
}
else{
    echo "key is not exists";
}
print_r($b);
echo "<br><br>";

echo "13.Returns all the keys or a subset of the keys of an array.<br>";
print_r(array_keys($b,4));
echo "<br>";
$a=array(10,34,56,89,"10");
print_r(array_keys($a,10,false));    //false is by default here 10 = "10"
echo "<br>";
print_r(array_keys($a,10,true));     //true not have 10 = "10"
echo "<br><br>";

echo "14.Returns all the values of an array.<br>";
print_r(array_values($b));
echo "<br><br>";

echo "--------------------------------Array Search---------------------------------<br>";
echo "15. Checks if a value exists in an array.<br>";
if(in_array(10,$a)){
    echo "Value found!";
}
else{
    echo "velue is not found";
}
echo "<br><br>";

echo "16. Searches an array for a given value and returns the corresponding key.<br>";
print_r(array_search(9,$b));
echo "<br><br>";

echo "17. Returns an array with elements in reverse order.<br>";
print_r(array_reverse($things));
echo "<br><br>";


echo "--------------------------------Array Sorting--------------------------------<br>";
// 18. sort($array):
echo "18. Sorts an array.<br>";
$sortarray= array("hello", "world", "hii","byy");
sort($sortarray);
print_r($sortarray);
echo "<br><br>";

// 19. rsort($array):
echo "19. Sorts an array in reverse order.<br>";
rsort($sortarray);
print_r($sortarray);
echo "<br><br>";

// 20. asort($array):
echo "20. Sorts an associative array by values.<br>";
$sorting = array("dj"=>90, "john"=>60, "ajay"=>80);
asort($sorting);
print_r($sorting);
echo "<br><br>";

// 21. ksort($array):
echo "21. Sorts an associative array by keys.<br>";
ksort($sorting);
print_r($sorting);
echo "<br><br>";

// 22. arsort($array):
echo "22. Sorts an associative array in reverse order by values.<br>";
arsort($sorting);
print_r($sorting);
echo "<br><br>";

// 23. krsort($array):
echo "23. Sorts an associative array in reverse order by keys.<br>";
krsort($sorting);
print_r($sorting);
echo "<br><br>";

echo "-------------------------------Array Filtering-------------------------------<br>";
echo "24. Filters elements of an array using a callback function.<br>";
$arr1 = array(2,4,9,8,5,0,1);
function filterfunction($num){
    return $num%2==0;
}
print_r(array_filter($arr1,"filterfunction"));
echo "<br>";
$arr2 = array("dj"=>200, "hiren"=>38, "raj"=>130, "dhruv"=>90, "harsh"=>180);
function filtering($marks){
    if ($marks > 100) {
        return true;
    }
    else{
        return false;
    }
}
print_r(array_filter($arr2, "filtering"));
echo "<br><br>";

echo "25. Applies a callback function to each element of an array.<br>";
function mapingfunction($x){
    return $x*2;
}
print_r(array_map("mapingfunction",$arr1));
echo "<br>";
$arr3 = array(5,3,8,3,9,0,2);
print_r(array_map(null,$arr1,$arr3));
echo "<br><br>";

echo "26. Iteratively reduces the array to a single value using a callback function.<br>";




?>