<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../ketnoi/config.php';
include_once '../doituong/unit.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$product = new Unit($db);
 
// query products
$stmt = $product->read();
$num = $stmt->rowCount();

//Create key
$key = '123';
 
function CryptoJSAesEncrypt($passphrase, $plain_text){

    $salt = openssl_random_pseudo_bytes(256);
    $iv = openssl_random_pseudo_bytes(16);
    //on PHP7 can use random_bytes() istead openssl_random_pseudo_bytes()
    //or PHP5x see : https://github.com/paragonie/random_compat

    $iterations = 999;  
    $key = hash_pbkdf2("sha512", $passphrase, $salt, $iterations, 64);

    $encrypted_data = openssl_encrypt($plain_text, 'aes-256-cbc', hex2bin($key), OPENSSL_RAW_DATA, $iv);

    $data = array("ciphertext" => base64_encode($encrypted_data), "iv" => bin2hex($iv), "salt" => bin2hex($salt));
    return json_encode($data);
}

 
// check if more than 0 record found
if($num>0){
 
    // products array
    $products_arr=array();
    $products_arr["unit"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $product_item=array(
            "electricity_payment" => $electricity_payment,
            "water_payment" => $water_payment
        );
 
        array_push($products_arr["unit"], $product_item);
    }
    
    $json = json_encode($products_arr);
    $encode = CryptoJSAesEncrypt($key,$json);
    echo $encode;
}
 
else{
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>