<?php

$con = mysqli_connect("localhost","id21054149_servvvv","Evan12345!","id21054149_servvvv",);

$email = $_GET['e'];

$sql = "SELECT * FROM `user_table` WHERE `email` LIKE '$email'";
$result = mysqli_query($con,$sql);

$data = array();

foreach($result as $item){
    $email = $item['email'];
    
    
    $userinfo['email'] = $email; 
    
    
    array_push($data, $userinfo);
    
}

echo json_encode($data);

?>