<?php


include('connection.php');

$connection = new Connection();


//$connection->createDatabase('Lab');

$connection->selectDatabase('Lab');

$query0 ="
CREATE TABLE Fields(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL
) "; 

$query = "
CREATE TABLE Researcher (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(80),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
idField INT(6) UNSIGNED NOT NULL,
FOREIGN KEY (idField) REFERENCES Fields(id)
)";

$connection->selectDatabase('Lab');

$connection->createTable($query0,$query);



?>
