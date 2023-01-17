<?php  

$server_name = "localhost";
$user_name = "root";
$password = "Mounaim_user2001";
$database = "php_proj";


$connet = new mysqli($server_name,$user_name,$password,$database);

// check connection : 

if ($connet->connect_error){ 
    die("connection failed " . $connet->connect_error);
} 
// echo "connected to the database ";


    
?>