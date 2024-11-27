<?php


class Researcher{


public $id;
public $firstname;
public $lastname;
public $email;
public $password;
public $reg_date; 


public static $errorMsg = "";


public static $successMsg="";



public function __construct($firstname,$lastname,$email,$password){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
}


public function insertResearcher($tableName,$conn){

    $sql = "INSERT INTO $tableName (firstname, lastname, email,password) VALUES ('$this->firstname','$this->lastname' , '$this->email', '$this->password')";
    if(mysqli_query($conn, $sql)) { 
    self::$successMsg ="New record created successfully";
    }else {
      self::$errorMsg= "Error: " . $sql . "<br>". mysqli_error($conn);
}


}


public static function  selectAllResearchers($tableName,$conn){
    $sql = "SELECT id, firstname, lastname,email FROM $tableName "; 
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $data=[];
      while($row = mysqli_fetch_assoc($result)){
        $data[]=$row;
  
    }
      return $data;
    }
}


static function selectResearcherById($tableName,$conn,$id){
    $sql = "SELECT  firstname, lastname,email FROM $tableName WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result) ;   

}
 return $row;
}
static function updateResearcher($researcher,$tableName,$conn,$id){
    $sql = " UPDATE $tableName SET firstname = '$researcher->firstname', lastname = '$researcher->lastname', email = '$researcher->email' WHERE id= '$id' ";
      if(mysqli_query($conn, $sql)) { 
       self::$successMsg ="New record updated successfully";

header("Location:readPOO.php");
  
}else {
  self::$errorMsg= "Error updating record: " . mysqli_error($conn);
}


}


static function deleteResearcher($tableName,$conn,$id){
    $sql = "DELETE FROM $tableName WHERE id='$id' ";
 if (mysqli_query($conn, $sql)) {
  self::$successMsg="Record deleted successfully";
 }else {
  self::$errorMsg = "Error deleting record: " . mysqli_error($conn);
 }

}


}


?>
