<?php
$emailErrorMsg = "";
$passwordErrorMsg ="";
$fnameError="";
$lnameError="";
$validPasswordError="";
$emailValue="";
$passwordValue="";
if(isset($_POST["submit"])){
    $emailValue = $_POST["emailName"];
    $fnameValue=$_POST["fname"];
    $lnameValue=$_POST["lname"];
    $passwordValue = $_POST["passName"];
    if($fnameValue=="") {
        $fnameError="First name must be filled out!";
    }
    if($lnameValue==""){
        $lnameError="Last name must be filled out !"; 
    }
    if($emailValue == ""){
      $emailErrorMsg ="Email must be filled out !";
    }
    else if(!preg_match("/\w+(@emsi.ma){1}$/",$emailValue)){
        $emailErrorMsg = "Please enter a valid emsi email!";
    }
    if( $passwordValue == ""){
        $passwordErrorMsg = "Password must be filled out!";
    }
   

    if($emailErrorMsg =="" && $passwordErrorMsg=="" && $fnameError=="" && $lnameError==""){
        session_start();
        $_SESSION["emailS"]=$emailValue;
        $_SESSION["passS"]=$passwordValue;
        header("location:login.php");
    
    }


}
?>