<?php

if($_GET['ip'] === null) echo 'false';
if($_GET['port'] === null) echo 'false';

$list = [
    "9992",
    "2222"
];

if(in_array($_GET['api'], $list)) {
    echo 'true';
}
else {
    echo 'false';
}

?>
