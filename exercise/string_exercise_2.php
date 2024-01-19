<?php
$text = "Hello, World! How are you doing?";

// 1. Find the length of the string.
echo "1. Find the length of the string.<br>";
echo strlen($text)."<br><br>"; 

// 2. Convert the entire string to lowercase.
echo "2. Convert the entire string to lowercase.<br>";
echo strtolower($text)."<br><br>";

// 3. Convert the entire string to uppercase.
echo "3. Convert the entire string to uppercase.<br>";
echo strtoupper($text)."<br><br>";

// 4. Replace "How are you doing?" with "Fine, thank you!".
echo "4. Replace 'How are you doing?' with 'Fine, thank you!'.<br>";
echo str_replace("How are you doing?", "Fine, thank you!", $text)."<br><br>";

// 5. Extract and print the first 10 characters of the string.
echo "5. Extract and print the first 10 characters of the string.<br>";
echo substr($text, 0, 10)."<br><br>";

// 6. Extract and print the substring starting from the 8th character to the end.
echo "6. Extract and print the substring starting from the 8th character to the end.<br>";
echo substr($text, 8);

?>