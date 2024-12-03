<?php
include('field.php');
include('connection.php');
   


$connection= new Connection();



 $connection->selectDatabase('Lab');


include('Researcher.php');
$researchers= Researcher::selectAllResearchers('Researcher',$connection->conn);
if(isset($_POST['submit'])){
    $researchers= Researcher::selectResearcherByFieldId('Researcher',$connection->conn,$_POST['fields']);  
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


<div class="container my-5">
    <h2>List of users from database</h2>
    <a  class="btn btn-primary" href="createPOO.php" role="button">Signup</a>


    <br>
    <br>
    <form method="post">

    <div class="input-group">
  <span class="input-group-btn">
   
    <button class="btn btn-success" type="submit" name="submit">Search</button>
   
  </span>
  <select name='fields' class="form-select">
                <option selected>Select a field</option>
                <?php 
               
                $fields=Field::selectAllFields('Fields',$connection->conn);
                foreach($fields as $field){
                    echo "<option value='$field[id]'>$field[name]</option>";
                }
                ?>
</select>
</form>
    <table class="table">
       <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Field name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>


        <?php
         //$researchers= Researcher::selectAllResearchers('Researcher',$connection->conn);
       
        foreach($researchers as $row) {
    
            $field = Field::selectFieldById('Fields',$connection->conn,$row['idField']);
           echo " <tr>
            <td>$row[id]</td>
            <td>$row[firstname]</td>
            <td>$row[lastname]</td>
            <td>$row[email]</td>
            <td>$field[name]</td>
            <td>
            <a class ='btn btn-success btn-sm' href='updatePOO.php?id=$row[id]'>edit</a>
            <a class ='btn btn-danger btn-sm' href='deletePOO.php?id=$row[id]'>delete</a>
            </td>
        </tr>";
        }
        
        ?>
        </tbody>
        
    </table>
    </div>
</body>
</html>

