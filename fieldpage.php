<?php

$nameValue = "";
if(isset($_POST["submit"])){


    $nameValue = $_POST["field"];



    if(empty($nameValue)){

        $errorMesage = "this field must be filed out!";
    }else{
        include('connection.php');
        include('field.php');
    
    

   


    $connection= new Connection();
  


    $connection->selectDatabase('Lab');
   


   $field = new Field($nameValue);


   $field = new Field($nameValue);
        if ($field->insertField('Fields', $connection->conn)) {
            $successMesage = Field::$successMsg;
            $nameValue = ""; 
        } else {
            $errorMesage = Field::$errorMsg;
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

<?php


    if(!empty($errorMesage)){
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$errorMesage</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  </button>
  </div>";
    }
?>


<br>

<form method="post">
    <div class="row mb-3">
            <label class="col-form-label col-sm-1" for="filiere">Field:</label>
            <div class="col-sm-6">
                <input  class="form-control" type="text" id="filiere" name="field">
            </div>
    </div>
   

    <?php
         if(!empty($successMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  


    <div class="row mb-3">
            <div class="offset-sm-1 col-sm-3 d-grid">
                <button name="submit" type="submit" class=" btn btn-primary"> Add a field </button>
            </div>
            
    </div>
</form>


</div>


</body>
</html>