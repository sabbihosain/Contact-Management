<?php

require_once 'connection.php';
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//                   echo  $ID = $_POST['id'];
   
//if (isset($_REQUEST["id"])) {
    $getId = $_REQUEST["id"];
    $dltquery = "DELETE  FROM users WHERE id='$getId'";
    $runDquery = mysqli_query($connection, $dltquery);
    if ($runDquery == true) {
        header("location: contactlist.php?delete");
    }
//}
?>