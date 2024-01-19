<?php
$sentence = "The quick brown fox jumps over the lazy dog";

// 1. Find the position of the word "fox" in the sentence.
echo "1. Find the position of the word 'fox' in the sentence.<br>";
echo strpos($sentence, "fox")."<br><br>";

// 2. Check if the word "cat" is present in the sentence.
echo "2. Check if the word 'cat' is present in the sentence.<br>";
if(stristr($sentence, "cat")){
    echo "Yes, 'cat' is found! <br><br>";
}
else{
    echo "'cat' is not found <br><br>";
}
// echo "there no 'cat' word so it show the blank"."<br>";

// 3. Extract and print the first 20 characters of the sentence.
echo "3. Extract and print the first 20 characters of the sentence.<br>";
echo substr($sentence, 0, 20);

?>