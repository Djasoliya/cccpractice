<?php
// 1. Basic Arithmetic
echo "------------------Basic Arithmetic------------------<br>";
echo abs(2.3)."<br>";
echo abs(-2.3)."<br>";
echo ceil(3.6)."<br>";
echo floor(3.2)."<br>";
echo round(2.46233)."<br>";

// 2. Power Functions
echo "------------------Power Functions-------------------<br>";
echo pow(5, 3)."<br>";
echo sqrt(64)."<br>";

// 3. Random Number Generation
echo "--------------Random Number Generation--------------<br>";
echo rand(1, 7)."<br>";

// 4. Number Formatting
echo "------------------Number Formatting-----------------<br>";
echo number_format(999999.99, 5, "-", "*")."<br>";
echo number_format(999999.9, 2, ".", ",")."<br>";
echo number_format(999999.99, 4, "|", "-")."<br>";

echo "------------------extra math functions-----------------<br>";
echo pi()."<br>";
$a = array(1,5,2,9,6,0);
echo min($a)."<br>";
echo max($a)."<br>";
echo log(3.67)."<br>";
echo log(0)."<br>";
echo log(1)."<br>";

?>