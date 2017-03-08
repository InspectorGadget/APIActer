<?php

if($_GET['ip'] === "") echo "IP is not present!";
if($_GET['port'] === "") echo "PORT is not present!";

$list = [
    "9992",
    "2222"
];

if(in_array($_GET['api'], $list)) {
    echo "IP: " . $_GET['ip'];
    echo "<br>";
    echo "PORT: " . $_GET['port'];
    echo "<br>";
    echo "Your API: " . $_GET['api'];
    echo "<br>";
}
else {
    echo "Unable to access API Page!. Please buy your key!";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> API </title>
    </head>
    <body>
        
        <h3> 
            <center>
                Thanks! :)
            </center>
        </h3>
        
    </body>
</html>