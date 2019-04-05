<?php
echo '"Welcome to CloudWays"<br>is used for this examples';

echo '<h4>define the lenght of a string</h4>';
// Will return the length of giving string
echo strlen('Welcome to CloudWays')  . ' (characters)';
echo '<br><br>';

echo '<h4>Count the number of words in a string</h4>';
// Will return the number of words in given string
echo str_word_count('Welcome to CloudWays') . ' (words)';
echo '<br><br>';

echo '<h4>Reversing a String</h4>';
// Will return the given string starting from the end
echo strrev('Welcome to CloudWays');
echo '<br><br>';

echo '<h4>Finding Text Within a String</h4>';
//echo's 11. Cloudways starts in the 11th place
echo strpos("Welcome to CloudWays", "CloudWays");
echo '<br><br>';

echo '<h4>Replacing text within a string</h4>';
//replaces the word 'cloudways' with 'the programming world' in the sentence 'welcome to cloudways
echo str_replace("CloudWays", "the programming world!","Welcome to CloudWays");
echo '<br><br>';

echo '<h4>Converting lowercase into Title Case</h4>';
//Every first letter of each word is in uppercase
echo ucwords("Welcome to the php world");
echo '<br><br>';

echo '<h4>Converting a whole string into UPPERCASE</h4>';
//every letter in uppercase
echo strtoupper("Welcome to CloudWays");
echo '<br><br>';

echo '<h4>Converting whole String to lowercase</h4>';
//every letter in lowercase
echo strtolower("WELCOME TO CLOUDWAYS");
echo '<br><br>';

echo '<h4>Converting whole String to lowercase</h4>';
//every letter in lowercase
echo strtolower("WELCOME TO CLOUDWAYS");
echo '<br><br>';

echo '<h4>Repeating a String</h4>';
//displays =============
echo str_repeat("=", 13);
echo '<br><br>';


echo '<h4>Comparing Strings</h4>';
echo strcmp('Cloudways','CLOUDWAYS');
echo '<br>';
//Both the strings are equal
echo strcmp('cloudways','cloudways');
echo '<br>';
echo strcmp('Cloudways','Hosting');
echo '<br>';
//compares alphabetically
echo strcmp('a','c');
echo '<br>';
//compares both strings and returns the result in terms of number of characters.
echo strcmp('abb baa','abb baa caa');;
echo '<br><br>';

echo '<h4>Displaying part of String</h4>';
//displays a part of a string
echo substr('Welcome to Cloudways',6).'<br>';
echo substr('Welcome to Cloudways',0,10).'<br>';
echo '<br><br>';

echo '<h4>Removing white spaces from a String</h4>';
//removes white space from a string
$str = "Wordpess Hosting";
echo $str . "<br>";
echo trim($str,"Wording");
echo '<br><br>';

?>