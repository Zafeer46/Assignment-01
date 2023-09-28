<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main1.css">
    <title>Assignment-01</title>
</head>
<body>
    <section class="total">
        <div class="head">
            <h1 class="heading">Hello!</h1>
        </div>
        <div class="form">
            <form target="_self" action="dashboard.php">
                <div class="r">
                <label for="user1" class="k">Email:</label> <br>
                <input class="username" id="user1" type="email" placeholder="abc@xyz.com" required name="User-name:"> <br></div>
                <div class="t">
                <label for="password1" class="l">Password:</label> <br>
                <input class="password" id="password1" type="password" placeholder="•••••••••••" name="pass:" required> <br></div>
                <input class="login" type="submit" value="Log In">
                <button class="signup-btn" onclick="document.location='signup.php'" >Signup</button>
  
            </form>
        </div>
    </section>
</body>
</html>

<?php

?>