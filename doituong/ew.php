<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "Electricity_Water";
 
    // object properties
    public $ew_code;
    public $number_electricty;
    public $number_water;
    public $date_of_print;
    public $device_code;

 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }


// create product
function create(){
 
    // query to insert record

    $query = "INSERT INTO Electricity_Water(number_electricty,number_water,date_of_print,room_code)
                SELECT :number_electricty as number_electricty ,:number_water as number_water, :date_of_print as date_of_print,room_code
                FROM Room as R
                WHERE  R.arduino_code = :device_code";

    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->number_electricty=htmlspecialchars(strip_tags($this->number_electricty));
    $this->number_water=htmlspecialchars(strip_tags($this->number_water));
    $this->date_of_print=htmlspecialchars(strip_tags($this->date_of_print));
    $this->device_code=htmlspecialchars(strip_tags($this->device_code));
 
    // bind values
    $stmt->bindParam(":number_electricty", $this->number_electricty);
    $stmt->bindParam(":number_water", $this->number_water);
    $stmt->bindParam(":date_of_print", $this->date_of_print);
    $stmt->bindParam(":device_code", $this->device_code);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
}