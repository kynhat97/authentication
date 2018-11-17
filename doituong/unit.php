<?php
class Unit{
 
    // database connection and table name
    private $conn;
    private $table_name = "Unit";
 
    // object properties
    public $electricity_payment;
    public $water_payment;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    function read(){
 
    // select all query

    $query = "SELECT * FROM Unit";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}
}