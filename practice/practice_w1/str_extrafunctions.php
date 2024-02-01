<?php
echo stripos("hello this is PHP and PHP tutorial", "PHP")."<br>";   //it return the first position of the given string

echo substr_compare("hello world!","o w",4)."<br>";            
//start with index 4 output is 4 here str1 is 5 char higher than str2
echo substr_compare("hello world!","o w",4,3)."<br>";               //start compare with index 4 and length 3
echo substr_compare("hello world!","abc",0)."<br>";               
echo substr_compare("hello World!","o w",4,3,true)."<br>";          //case-insensitive
echo substr_compare("hello world!","o w",4,3,false)."<br><br>";         //case-sensitive

$str1= "HELLO WORLD";
echo lcfirst($str1)."<br>";            //it converts the first character of the string to the lowercase

$str1= "hello world";
echo ucfirst($str1)."<br><br>";            //it converts the first character of the string to the upercase

$strlastpos = "this is php and 'php' tutorial";
echo strripos($strlastpos, "PHP")."<br>";   //it return the last occcurence of the string case-insensitive
echo strrpos($strlastpos, "php")."<br><br>";   //It finds the length of the last occurrence of a substring in a string.

echo addslashes($strlastpos)."<br><br>";

$strchop = "hello this is php tutorial and php functions";
echo chop($strchop, "and php functions")."<br><br>"; //it remove the whitespace and predefine character from right side

$strchop = "hello this is php tutorial and php functions \n\n";
echo chop($strchop, "and php functions")."<br><br>";    

$strsplitchunk = "hello my name is dhruvit jasoliya and i am doing engineering";
echo chunk_split($strsplitchunk,3)."<br>";          //it splite the string into part of three-three default 76
echo chunk_split($strsplitchunk,3,".")."<br>";      //it put the '.' at end of every part
echo chunk_split($strsplitchunk,3,"*")."<br>";      
echo chunk_split($strsplitchunk,3,"-")."<br><br>";

echo nl2br("this is a \nPHP basic functions");      //it convert the '\n' to html tag '<br>'

?>