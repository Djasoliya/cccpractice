<?php
$name = "John";

// 1. Pad the string with underscores (`_`) on the left side to make its total length 10 characters.
echo "1. Pad the string with underscores (`_`) on the left side to make its total length 10 characters.<br><br>";
$str1 = str_pad($name, 10, "_", STR_PAD_LEFT)."<br>";

// 2. Pad the string with asterisks (`*`) on the right side to make its total length 8 characters.
echo "2. Pad the string with asterisks (`*`) on the right side to make its total length 8 characters.<br><br>";
$str2 = str_pad($name, 8, "*")."<br>";


// 3. Print the resulting strings.
echo $str1;
echo $str2;

?>