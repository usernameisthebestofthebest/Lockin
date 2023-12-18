<?php 

if(empty($_POST["newusername"])) {
    die("Required ang username boss");
}

if(strlen($_POST["newpassword"]) < 8) {
    die("Eight pataas kailangan para sa password boss");
}


if($_POST["newpassword"] !== $_POST["repeatpassword"]) {
    die("Wa ga di mao ang imong password boss");
}

$password_hash = password_hash($_POST["newpassword"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO wew (username, password_hash, repeatpassword)
         VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();

if( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["newusername"],
                  $password_hash,
                  $_POST["repeatpassword"]);
                  
if($stmt->execute()) {
    header("Location: successreg.html");
    exit;
}
 else {
    die($mysqli->error . " " . $mysqli->errno);
    }
