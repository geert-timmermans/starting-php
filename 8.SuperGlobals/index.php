<?php

echo'<h2>$_GET</h2>';
echo'<h4>put this code behind your url:<br>index.php?name=Kees&age=42</h4>';
//isset() = Determine if a variable is declared and is different than NULL
if(isset($_GET['name'], $_GET['age'])){
    echo 'Hey there '.$_GET['name'].', You are '.$_GET['age'].' years old.';
}else{
    echo 'One of the required GET variables does not exist';
}
echo'<br><br>';

echo'<h2>$_SERVER</h2>';
echo'<h4>This variable contains information about the server and the way it communicates with the server</h4>';
echo '<pre>' . print_r($_SERVER, true) . '</pre>';

?>