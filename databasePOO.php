<?php


include('connection.php');

$connection = new Connection();


$connection->createDatabase('Lab');

$query = "
CREATE TABLE Researcher (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(80),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
";

$connection->selectDatabase('Lab');


$connection->createTable($query);


?>
