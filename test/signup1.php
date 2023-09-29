<?php

@include 'process.php';

session_start();

if(isset($_POST['submit'])){
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['pass']);
    $pass1 = md5($_POST['pass1']);
 
    $select = " SELECT * FROM credentials WHERE email = '$email' && password = '$pass'";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
       $error[] = 'Email already registered!';
    }else{
       if($pass != $pass1){
          $error[] = 'Passwords do not match!';
       }else{
          $insert = "INSERT INTO credentials(email, password) VALUES('$email','$pass')";
          mysqli_query($conn, $insert);
          header('location:index.php');
       }
    }
 
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup1.css">
    <title>Assignment-01</title>
</head>
<body>
<section class="total">
        <div class="head">
            <h1 class="heading">Signup</h1>
        </div>
        <div>
            
        
        <?php
         if(isset($error)){

            foreach($error as $error){
                
                echo '<div class="qqq">'.$error.'</div>';
                
            }
         }
      ?>

        </div>
        
        <div class="form">
            <form method="POST">
                <label for="a1">Enter Email:</label> <br>
                <input class="username" id="a1" type="email" placeholder="abc@xyz.com" required name="email"> <br>
                <label for="a2">Create Password:</label> <br>
                <input class="password" id="a2" type="password" placeholder="•••••••••••" name="pass" required> <br>
                <label for="a3">Confirm Password:</label> <br>
                <input class="password1" id="a3" type="password" placeholder="•••••••••••" name="pass1" required > <br>
                <input class="login" type="submit" value="Register" name="submit" >
                <br>
                <a href="index1.php" class="back">Back to LogIn</a>
                
  
            </form>
        </div>
    </section>
</body>
</html>