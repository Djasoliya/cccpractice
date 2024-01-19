<?php
$sentence = "The quick brown fox jumps over the lazy dog";

// 1. Find the position of the word "fox" in the sentence.
echo strpos($sentence, "fox")."<br>";

// 2. Check if the word "cat" is present in the sentence.
if(stristr($sentence, "cat")){
    echo "Yes, 'cat' is found! <br>";
}
else{
    echo "'cat' is not found <br>";
}
// echo "there no 'cat' word so it show the blank"."<br>";

// 3. Extract and print the first 20 characters of the sentence.
echo substr($sentence, 0, 20);

?>