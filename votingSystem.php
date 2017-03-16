<?php
$data = 
    $_POST['name'] . '-' .
    $_POST['email'] . '-' .
    $_POST['x'] . '-' .
    $_POST['y'] . "\n";
    $ret = file_put_contents('mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "Thank you for voting! Come back soon for results.";
    }

