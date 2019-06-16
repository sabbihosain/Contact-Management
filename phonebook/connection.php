<?php
    $connection = mysqli_connect('localhost', 'root', '', 'mycontact');
    if (!$connection) {
        echo "Error:", mysqli_connect_error();
    }
?>