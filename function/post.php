<?php
// required headers
date_default_timezone_set('Asia/Ho_Chi_Minh');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../ketnoi/config.php';
 
// instantiate product object
include_once '../doituong/ew.php';
 
$database = new Database();
$db = $database->getConnection();
 
$product = new Product($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set product property values
$product->number_electricty = $data->number_electricty;
$product->number_water = $data->number_water;
$product->device_code = $data->device_code;
//$product->date_of_print = $data->date_of_print;
$product->date_of_print = date('YmdHis');
 
// create the product
if($product->create()){
    echo '{';
        echo '"message": "Product was created."';
    echo '}';
}
 
// if unable to create the product, tell the user
else{
    echo '{';
        echo '"message": "Unable to create product."';
    echo '}';
}
?>