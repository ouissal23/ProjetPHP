<?php


class Connection{


private $servername="localhost";
private $username="root";
private $password="";
public $conn;


public function __construct(){
    $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
    if (!$this->conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
 
 
}


function createDatabase($dbName){
    $sql = "CREATE DATABASE $dbName ";
  if (mysqli_query($this->conn, $sql)) {  
    echo "Database created successfully";
 } else{ 
    echo "Error creating database: " . mysqli_error($this->conn); 
} 
}


function selectDatabase($dbName){
    mysqli_select_db($this->conn,$dbName);

}
function createTable($query0,$query){
    
    if (mysqli_query($this->conn,$query0)) { 
        echo "Table Fields created successfully"; 
    }else{  
        echo "Error creating table: " . mysqli_error($this->conn); 
    }
    
    if (mysqli_query($this->conn,$query)) { 
        echo "Table Researcher created successfully"; 
    }else{  
        echo "Error creating table: " . mysqli_error($this->conn); 
    }
     

}

}


?>
