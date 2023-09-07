<?php

$con = mysqli_connect("localhost","id21054149_servvvv","Evan12345!","id21054149_servvvv",);

$email = $_GET['e'];
$password = $_GET['p'];

$sql = "SELECT * FROM `user_table` WHERE BINARY `email `='$email' AND BINARY `password`='$password'";
$result = mysqli_query($con,$sql);

$data = array();

foreach($result as $item){
    $email = $item['email'];
    $password = $item['password'];
    
    $userinfo['email'] = $email; 
    $userinfo['password'] = $password;
    
    array_push($data, $userinfo);
    
}

echo json_encode($data);

?>