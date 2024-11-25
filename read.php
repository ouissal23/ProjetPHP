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
    <a  class="btn btn-primary" href="create.php" role="button">Signup</a>

    <br>
    <br>
    <table class="table">
       <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
 
<?php
 include("database.php");
  $sql = "SELECT id, firstname, lastname,email FROM labo"; 
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>$row[id]</td>
        <td>$row[firstname]</td>
        <td>$row[lastname]</td>
        <td>$row[email]</td>
        <td>
        <a class='btn btn-success btn-sm' href='update.php?idUpdated=$row[id]'>Edit</a>
        <a class='btn btn-danger btn-sm' href='delete.php?idDeleted=$row[id]'>Delete</a>
        </td>
    </tr>";
      }
    }
    
?>
        
        </tbody>
        
    </table>
    </div>
</body>
</html>