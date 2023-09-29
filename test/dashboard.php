<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <title>Assignment-01</title>
</head>
<body>
    <section class="box">
        <div class="centerbox">
            <h1 class="title">Welcome <3</h1>
        </div>
        <form action="" method="post">
            <input class="button" type="submit" value="Log Out" onclick=document.location="logout.php">
        </form>
    </section>
</body>
</html>