<?php

echo'<h4>Everytime the variable is adjusted</h4>';
$name = "Eric";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Stan";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Kyle";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Kenny";
echo "<p>Hello $name!</p>";
echo '<hr>';
echo '<br><br>';

echo'<h4>Function created for cleaner code with the same result</h4>';
function say_hello($name){
    echo "<p>Hello $name!</p>";
    echo '<hr>';
}

// Function calls
say_hello('Eric');
say_hello('Stan');
say_hello('Kyle');
say_hello('Kenny');

echo '<br>';
echo '<h4>shuffle of a string</h4>';
$text = "This sentence is jumbled up!";
echo $text . '<br>';
$text = str_shuffle ($text);

echo $text;
echo '<br>'

?>
