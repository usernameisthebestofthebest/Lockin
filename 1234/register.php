<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">

    <title>Document</title>
</head>
<body>
    <h1>SIGN-UP</h1>
    <div class="design-container1">
        <div class="design2"><br>
        <form action="process.php" method="post">
            <input type="email" name="newusername" id="newusername" placeholder="New username"><br>
            <input type="password" name="newpassword" id="newpassword" placeholder="New password"><br>
            <input type="password" name="repeatpassword" id="repeatpassword"  placeholder="Repeat-password"><br>
           <input type="submit" name="" value="submit"><br>
            <p id="st">You already have account?</p>
            <a href="login.php" id="login">click here</a>
</form>
        </div>
    </div>
    
</body>
</html>