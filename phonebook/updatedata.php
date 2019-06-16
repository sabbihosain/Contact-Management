<?php

require_once("connection.php");

if (isset($_REQUEST["editdata"])) {
    $ID = $_REQUEST["id"];
    $FIRSTNAME = $_REQUEST["firstname"];
    $LASTNAME = $_REQUEST["lastname"];
    $EMAIL = $_REQUEST["email"];
    $PASSWORD = $_REQUEST["password"];
//     ai porzonto thik asay
    //kaj kpry na uedate ta
    $sql = "UPDATE users SET firstname='$FIRSTNAME',lastname='$LASTNAME',email='$EMAIL',password='$PASSWORD' WHERE id='$ID'";
    $result=mysqli_query($connection, $sql);
    if ($result == true) {
        header("location: contactlist.php?edited");
    } else {
        echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    }
}
