<?php 

$is_invalid  = false;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM wew
            WHERE username = '%s'",
            $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);

    $wew = $result->fetch_assoc();

    if ($wew) {
        if(password_verify($_POST["password"], $wew["password_hash"]))  {
            
            session_start();

            $_SESSION["user_id"] = $wew["id"];

            header("Location: home.php");
            exit;
        }

    }
    $is_invalid = true;
    

} 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>

<body>
       

    

    <h1>LOGIN</h1>

    
    <div class="design-container">
        <div class="design1"><br>
        <form method="post">
            <input type="email" name="email" id="email"  placeholder="username"><br>
           <?= htmlspecialchars($_POST["email"] ?? "") ?>

            <input type="password" name="password" id="password"  placeholder="password"><br>
            <input type="submit" name="" value="submit"><br>
            <p id="st">You have no account?</p>
            <a href="register.php" id="register">click here</a>
</form>
        </div>
    </div>
    
</body>
</html>