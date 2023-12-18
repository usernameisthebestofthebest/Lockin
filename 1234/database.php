<?php

$host = "localhost";
$dbname = "logreg";
$newusername = "root";
$newpassword = "";

$mysqli = new mysqli(hostname: $host,
                     username: $newusername,
                     password: $newpassword,
                     database: $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}
return $mysqli;
?>