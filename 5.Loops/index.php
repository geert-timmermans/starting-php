<?php
echo'<h4>for loop</h4>';
for ($i = 1; $i < 10; $i++) {
    echo "$i. Hello world! <br/>";
}

$age = 0;
echo'<br>';
echo'<h4>for loop</h4>';
while ($age < 18) {
    echo 'You are not old enough!';
    echo'<br>';
    $age++;
}

echo'<br>';
echo'<h4>foreach</h4>';
$colors = array('red', 'green', 'blue', 'yellow');

foreach ($colors as $value) {
    echo "$value <br>";
}

?>