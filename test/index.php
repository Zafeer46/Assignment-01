<?php

@include 'process.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['pass']);

   $select = " SELECT * FROM credentials WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $_SESSION['email'] = $email;
      header('location:dashboard.php');
      
   }else{
      $error[] = 'Incorrect password or email!';
   }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="extra.css">
    <title>Assignment-01</title>
</head>
<body>
    <section class="total">
        <div class="head">
            <h1 class="heading">Hello!</h1>
        </div>
        <div class="error-div">
            
        
        <?php
         if(isset($error)){

            foreach($error as $error){
                
                echo '<div class="qqq">'.$error.'</div>';
                
            }
         }
      ?>

        </div>
        
        
        <div class="form">
            <form target="_self" action="" method="post">          
                <div class="r">
                <label for="user1" class="k">Email:</label> <br>
                <input class="username" id="user1" type="email" placeholder="abc@xyz.com" required name="email"> <br></div>
                <div class="t">
                <label for="password1" class="l">Password:</label> <br>
                <input class="password" id="password1" type="password" placeholder="•••••••••••" name="pass" required> <br></div>
                <input class="login" type="submit" name="submit" value="Log In">
                <button class="signup-btn" onclick="document.location='signup.php'" >Signup</button>
  
            </form>
        </div>
    </section>
</body>
</html>

<?php

?>