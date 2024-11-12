<?php
session_start();
session_destroy();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>
 <div class="login">
    <h1>Login</h1>
    <form action="" method="post">
    <label>Email</label>
    <input value="<?php if(isset($emailValue)) echo $emailValue?>" name= "emailName" type="email" placeholder=""><br>
    <span style='color:red'> <?php echo $emailErrorMsg ?></span>
    <label>Password</label>
    <input  name= "passName" type="password" placeholder=""><br>
    <span style='color:red'><?php echo $passwordErrorMsg ?></span>
    <button name="submit" type="submit" class="btn btn-primary">Login</button>
</form>



 </div>
    
</body>
</html>