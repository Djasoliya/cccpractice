<?php
$quote = "In three words I can sum up everything I've learned about life: it goes on.";

// 1. Count the total number of words in the quote.
echo "1. Count the total number of words in the quote.<br>";
echo str_word_count($quote)."<br><br>";

// 2. Convert the entire quote to lowercase.
echo "2. Convert the entire quote to lowercase.<br>";
echo strtolower($quote)."<br><br>";

// 3. Capitalize the first letter of each word in the quote.
echo "3. Capitalize the first letter of each word in the quote.<br>";
echo ucwords($quote);


?>