<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname="testDb";
 // Create connection
 $conn = mysqli_connect($servername, $username, $password,$dbname);
 // Check connection
 /*if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";
 $sql = "CREATE DATABASE testDb";
  if (mysqli_query($conn, $sql)) {  
    echo "Database created successfully";
 } else {  echo "Error creating database: " . mysqli_error($conn); 
}*/
/*$query = " CREATE TABLE testDb.labo(
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 firstname VARCHAR(30) NOT NULL, 
 lastname VARCHAR(30) NOT NULL, 
 email VARCHAR(50) UNIQUE, 
 password VARCHAR(80),  
 reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  ) ";
if (mysqli_query($conn, $query)) { 
    echo "Table labo created successfully"; 
}else{  
    echo "Error creating table: " . mysqli_error($conn); 
}*/


?>
