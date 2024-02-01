<?php
echo "---------------------Data Types---------------------<br>";
echo "1)interger<br>";
$intergerVar = 42;
echo $intergerVar ."<br>";
var_dump($intergerVar);
echo "<br><br>";

echo "2)float<br>";
$floatVar = 3.14;
echo $floatVar."<br>";
var_dump($floatVar);
echo "<br><br>";


echo "3)string<br>";
$stringVar = "Hello, PHP!";
echo $stringVar."<br>";
var_dump($stringVar);
echo "<br><br>";

echo "4)boolean<br>";
$boolVar = true;
echo $boolVar."<br>";
var_dump($boolVar);
echo "<br><br>";

echo "5)array<br>";
$arrayVar = array(1, "hello", 3, "PHP");
print_r($arrayVar);
echo "<br>";
var_dump($arrayVar);
echo "<br><br>";

echo "6)null<br>";
$nullVar = null;
echo $nullVar."<br>";
var_dump($nullVar);
echo "<br><br><br>";

// (string) - Converts to data type String
echo "--------------Converts to data type String--------------";
$tostring = (string)$intergerVar;
echo "<br>";
var_dump($tostring);

$tostring = (string)$floatVar;
echo "<br>";
var_dump($tostring);

$tostring = (string)$boolVar;
echo "<br>";
var_dump($tostring);

$tostring = (string)$nullVar;
echo "<br>";
var_dump($tostring);
echo "<br><br>";


// (int) - Converts to data type Integer
echo "--------------Converts to data type Integer--------------";
$tostring = (int)$stringVar;
echo "<br>";
var_dump($tostring);

$tostring = (int)$floatVar;
echo "<br>";
var_dump($tostring);

$tostring = (int)$boolVar;
echo "<br>";
var_dump($tostring);

$tostring = (int)$nullVar;
echo "<br>";
var_dump($tostring);
echo "<br><br>";


// (float) - Converts to data type Float
echo "--------------Converts to data type Float--------------";
$tostring = (float)$stringVar;
echo "<br>";
var_dump($tostring);

$tostring = (float)$intergerVar;
echo "<br>";
var_dump($tostring);

$tostring = (float)$boolVar;
echo "<br>";
var_dump($tostring);

$tostring = (float)$nullVar;
echo "<br>";
var_dump($tostring);
echo "<br><br>";


// (bool) - Converts to data type Boolean
echo "--------------Converts to data type Boolean--------------";
$tostring = (bool)$stringVar;
echo "<br>";
var_dump($tostring);

$tostring = (bool)$floatVar;
echo "<br>";
var_dump($tostring);

$tostring = (bool)$intergerVar;
echo "<br>";
var_dump($tostring);

$tostring = (bool)$nullVar;
echo "<br>";
var_dump($tostring);
echo "<br><br>";


// (array) - Converts to data type Array
echo "--------------Converts to data type Array--------------";
$tostring = (array)$stringVar;
echo "<br>";
var_dump($tostring);

$tostring = (array)$floatVar;
echo "<br>";
var_dump($tostring);

$tostring = (array)$boolVar;
echo "<br>";
var_dump($tostring);

$tostring = (array)$intergerVar;
echo "<br>";
var_dump($tostring);

$tostring = (array)$nullVar;
echo "<br>";
var_dump($tostring);
echo "<br><br>";


// (unset) - Converts to data type NULL
echo "--------------Converts to data type Null--------------";
$tostring = (unset)$stringVar;
echo "<br>";
var_dump($tostring);

$tostring = (unset)$floatVar;
echo "<br>";
var_dump($tostring);

$tostring = (unset)$intergerVar;
echo "<br>";
var_dump($tostring);

$tostring = (unset)$boolVar;
echo "<br>";
var_dump($tostring);

$tostring = (unset)$nullVar;
echo "<br>";
var_dump($tostring);
echo "<br>";
echo "<br>";

?>