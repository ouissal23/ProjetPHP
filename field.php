<?php

class Field{

    public $id;
    public $name;
    public static $errorMsg="";
    public static $successMsg="";
    
    public function __construct($name){
        $this->name= $name;
    }
    public function insertField($tableName,$conn){
        $sql ="INSERT INTO $tableName(name)VALUES ('$this->name')";
        if(mysqli_query($conn, $sql)) { 
            self::$successMsg ="New record created successfully";
            }else {
              self::$errorMsg= "Error: " . $sql . "<br>". mysqli_error($conn);
        }
    
    }

    public static function  selectAllFields($tableName,$conn){

        $sql = "SELECT id, name FROM $tableName";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $table=[];
        while($row = mysqli_fetch_assoc($result)) {
        $table[]=$row;
        }
        return $table;
        }
        }


        public static function selectFieldById($tableName,$conn,$id){
            //select a client by id, and return the row result
            $sql = "SELECT name FROM $tableName WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        }
        return $row;
        
        }
    }



?>