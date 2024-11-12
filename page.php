<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>Page</title>
</head>
<body>
    <?php
    include("navbar.php");
    echo "Welcome to Page , your information:<br>";
    echo 'Email:' .$_SESSION["emailS"]. '<br>';
    echo 'Password:'.$_SESSION["passS"].'<br>';
    ?>
</body>
</html>