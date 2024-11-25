 <?php

 include("database.php");

$errorMsg="";
$fnameValue="";
$lnameValue="";
$emailValue="";
$successMsg="";
if (isset($_GET['idUpdated'])) {
    $idUpdated = $_GET['idUpdated'];

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
  
   
    $sql = "SELECT  firstname, lastname,email FROM labo WHERE id ='$idUpdated'";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        
           $emailValue = $row['email'];
           $fnameValue = $row['firstname'];
           $lnameValue = $row['lastname'];

        }
      }
     

}

else if(isset($_POST['submit'])){
    $fnameValue=$_POST['firstName'];
    $lnameValue=$_POST['lastName'];
    $emailValue=$_POST['email'];
    if(empty($fnameValue) || empty($lnameValue) || empty($emailValue) ){
       $errorMsg="All fileds are required!";
    }else{
        include("database.php");

        $sql = " UPDATE labo SET firstname = '$fnameValue', lastname = '$lnameValue', email = '$emailValue' WHERE id= '$idUpdated' ";
          if(mysqli_query($conn, $sql)) { 
           $successMsg ="New record updated successfully";
           header("Location:read.php");
          }else {
            $errorMsg= "Error: " . $sql . "<br>". mysqli_error($conn);
    }
    
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5 ">

        <h2>SIGN UP</h2>

  <?php
    if(!empty($errorMsg)){
     echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <strong> $errorMsg  </strong>
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
     </button>
     </div>";
    }
     ?>


        <br>
        <form method="post">
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="fname">First Name:</label>
                    <div class="col-sm-6">
                        <input value="<?php echo $fnameValue?>" class="form-control" type="text" id="fname" name="firstName">
                    </div>
            </div>
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="lname">Last Name:</label>
                    <div class="col-sm-6">
                        <input value="<?php echo $lnameValue?>" class="form-control" type="text" id="lname" name="lastName">
                    </div>
            </div>
            <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="email">Email:</label>
                    <div class="col-sm-6">
                        <input value="<?php echo $emailValue?>" class="form-control" type="email" id="email" name="email">
                    </div>
            </div>
           
<?php
 if(!empty($successMsg)){
    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong> $successMsg Message</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
   </button>
    </div> ";}
?>
      

            <div class="row mb-3">
                    <div class="offset-sm-1 col-sm-3 d-grid">
                        <button name="submit" type="submit" class=" btn btn-primary" >Update</button>
                    </div>
                    <div class="col-sm-1 col-sm-3 d-grid">
                        <a class="btn btn-outline-primary"href="read.php" >Cancel</a>
                    </div>
            </div>
        </form>

    </div>


</body>
</html>