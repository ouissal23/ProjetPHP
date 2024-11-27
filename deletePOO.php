<?php


if($_SERVER['REQUEST_METHOD']=='GET'){


    $id=$_GET['id'];


    include('connection.php');
   


    $connection= new Connection();
    
    
    
    $connection->selectDatabase('Lab');
    
    
    include('Researcher.php');

   Researcher::deleteResearcher('Researcher',$connection->conn,$id);
   header("Location:readPOO.php");

}
?>

