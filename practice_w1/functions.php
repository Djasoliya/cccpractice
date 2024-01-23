<?php
/*
#<-------------Returns the length of a string------------------>
$str1 = "dhruvit";          // returns 7 because string length is 7        
$str1 = "";                 // returns 0 because there is nothing in string 
$str1 = " ";                // returns 1 because there is one space character in the string
$str1 = "$%1";              // returns 3 because there is 3 symbole
echo strlen($str1); 
*/ 

/*
#<-------------Replaces all occurrences of a substring with another substring in a given string------------------>
$str2 = "hello world";                                  //here hello is relace by the hii
echo  str_replace("hello", "hii", $str2) ."<br>";
$str2 = "good,morning,everyone";                        //all , is replace by space
echo  str_replace(",", " ", $str2, $a) ."<br>";         //here $a is count the number of replacement
echo  "number of relacement is : " .$a;
*/

/*
#<-------------Finds the position of the first occurrence of a substring in a string------------------>
$str3 = "string position !";
echo strpos($str3, 'r') ."<br>";             //it return the position of the 'r' is 2
echo strpos($str3, " ") ."<br>";             //it return the position of the space is 6
echo strpos($str3, "!") ."<br>";             //it return the position of the special character is 16
echo strpos($str3, " ", 7);                  //it return the position of the space but it search start from the position 7 
*/

/*
#<-------Returns a part of a string starting from the specified position and with a specified length-------->
$str4 = "find the substring";           
echo substr($str4, 3)."<br>";           //it return the substring from start index 5
echo substr($str4, -5)."<br>";          //it return the substring from start index -5 it count from the end
echo substr($str4, 5, 3)."<br>";        //it return the substring from start index 5 and length is 3
echo substr($str4, -10, -3)."<br>";     //it return the substring from start index -10 and length is -3 from the end
echo substr($str4, 2, -3);
*/

/*
#<-------Converts a string to lowercase-------->
$str5 = "CONVERT THE STRING LOWERCASE";
$str5 = "*%$";                          //it not work on special characters
echo strtolower($str5);
*/

/*
#<-------Converts a string to uppercase-------->
$str6 = "converts a string to uppercase";
$str6 = "*%$";                          //it not work on special characters
echo strtoupper($str6);
*/

/*
#<-------Removes whitespace or other predefined characters from the beginning and end of a string-------->
$str7 = "          remove space       ";       //it remove the space from both site start and end
echo trim($str7) ."<br>";
$str7 = "remove space";    //it remove the character from both sides
echo trim($str7, "reme");
*/

/*
#<-------Joins array elements with a string-------->
$str8 = array("joins", "array", "elements", "with", "string");
echo implode("/", $str8)."<br>";                //it joins the all array element with "/"
echo implode("-", $str8);
*/

/*
#<-------Splits a string into an array by a specified delimiter-------->
//The explode() function breaks a string into an array.
$str9 = "Splits a string into an array by a specified delimiter";
$a = explode(" ", $str9);                   //every space cut the string
echo $a[2]."<br>";                          //it return the second element of the array of a
$b = explode("a", $str9);                   //every 'a' is cut the string 
print_r($b);                                //it return the full array also it remove the all 'a'
*/

/*
#<-------Converts special characters to HTML entities-------->
$str10 = 'converts special "characters" to HTML entities';
echo htmlspecialchars($str10);                  //it will converts only double quotes. quotes= &quot;, < = &lt;, ' = &#039;
echo htmlspecialchars($str10, ENT_QUOTES);      //it will converts both single and double quotes
echo htmlspecialchars($str10, ENT_NOQUOTES);    //it will not converts anyone single and double quotes
//it shows only html code source, browser show same string
*/

/*
#<-------Converts all applicable characters to HTML entities-------->
//The htmlentities() function converts characters to HTML entities
$str11 = '<a href = "googlr.com">Google</a>';
// &lt;a href=&quot;google.com&quot;&gt;Google&lt;/a&gt;
echo htmlentities($str11, ENT_COMPAT);          // Will only convert double quotes
//it shows only html code source, browser show same string
*/

/*
#<-------Repeats a string a specified number of times-------->
echo str_repeat("dj", 7);                       // Repeats a string a specified number of times
*/

/*
#<-------Reverses a string-------->
$str = "reverses a string";
echo strrev($str)."<br>";
$str = 1234567;
echo strrev($str);
*/

/*
#<-------Randomly shuffles all characters in a string-------->
$name = "Dhruvit";
$name = 123456789;
echo str_shuffle($name);
*/

/*
#<-------Converts a string to an array, breaking it into smaller parts-------->
$splitstr = "string spliting";
$splitstr=123456;
print_r(str_split($splitstr));               //it create array of 1-1 characters of the given string
echo "<br>";
print_r(str_split($splitstr, 3));            //it create array of 3-3 characters of the given string
*/

/*
#<-------Returns the number of words in a string-------->
$str = "i am dhruvit jasoliya & i am a intern";
echo str_word_count($str)."<br>";           //it return the number of words but it not consider the special characters
print_r(str_word_count($str,1));            //it return array of the words
echo "<br>";           
print_r(str_word_count($str,2));            //it return array of the words, words starting index
echo "<br>";                                //only one symbol can be added
print_r(str_word_count($str,1,"&"));        //it return array of the words and also it consider the secified symbol
*/

/*
#<-------Replaces a portion of a string with another string-------->
$substrrep = "hello this is substring replacement";
echo substr_replace($substrrep, "there", 6)."<br>";   //it replace start at index 6 "this is substring replacement" is relace with "there"
echo substr_replace($substrrep, "there", -6)."<br>";  //it replace start at last to 6 index 
echo substr_replace($substrrep, "there", 6, 4);       
//it replace start at index 6 with length 4 "this" 4 character is replace with "there"  
*/

/*
#<-------Pads a string to a certain length with another string-------->
$str = "Hello World";
echo str_pad($str, 15,".")."<br>";                    //it add the 15 length "." character at right side
echo str_pad($str, 25,"-:")."<br>";                   
echo str_pad($str, 15,".",STR_PAD_LEFT)."<br>";       //it add the 15 length "." character at left side
echo str_pad($str, 15,".",STR_PAD_BOTH);              //it add the 15 length "." character at both side
*/

/*
#<-------Locale based string comparison-------->
$str1 ="hello world";           //it compare the string str1<str2 then -1, str1>str2 then 1 if equals then 0
$str2 = "hii";                  //h=h equal then check next character e<i so str1<str2
echo strcoll($str1, $str2);
*/

/*
#<-------Finds the length of the initial segment not matching a mask-------->
$str = "this is the string practice Functions and basic Functions";
$disallowed = "F";
echo strcspn($str, $disallowed)."<br>";       //count the character in string which are occurs before the disallowed char
echo strcspn($str, $disallowed,30)."<br>";    //count the character from start index 30 to disallowed character
echo strcspn($str, $disallowed,30,10);        //count the character from start index 30 to length 10 
*/

/*
#<-------Case-insensitive search for the first occurrence of a string-------->
$str = "search for first occurrence of the string";
echo stristr($str, "FOR")."<br>";
echo stristr($str, "for", true);               // it return the string before match
*/

/*
#<-------Converts the first character of a string to uppercase-------->
$str = "my name is dhruvit jasoliya";
echo ucfirst($str);
*/

/*
#<-------Converts the first character of each word in a string to uppercase-------->
$str = "my name is dhruvit jasoliya";
echo ucwords($str);
*/
?>