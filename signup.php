<?php
session_start();
session_destroy();
include("config2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-box">
    <h1>Sign Up </h1>
    <form action="" method="post">
        <label>First Name</label>
        <input value="<?php if(isset($fnameValue)) echo $fnameValue?>" type="text"  name= "fname"placeholder=""> <br>
        <span style='color:red'><?php echo $fnameError  ?></span><br>
        <label>Last Name</label>
        <input value="<?php if(isset($lnameValue)) echo $lnameValue?>" type="text" name="lname"placeholder=""><br>
        <span style='color:red'><?php echo $lnameError  ?></span>
        <label>Email</label>
        <input value="<?php if(isset($emailValue)) echo $emailValue?>" type="email" name="emailName" placeholder=""><br>
        <span style='color:red'> <?php echo $emailErrorMsg ?></span>
        <label>Password</label>
        <input value="<?php if(isset($passwordValue)) echo $passwordValue?>"  type="password" name="passName" placeholder=""><br>
        <span style='color:red'> <?php echo $passwordErrorMsg ?></span><br>
        <button type="submit" class="btn" name="submit">Sign Up</button>

    
    

    </form>
</div>  
</body>
</html>