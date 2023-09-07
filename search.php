<?php

$con = mysqli_connect("localhost","id21054149_servvvv","Evan12345!","id21054149_servvvv",);

$category = $_GET['c'];
$district = $_GET['di'];
$thana = $_GET['th'];



$sql = "SELECT * FROM `user_table` WHERE category Like '%$category%' AND district LIKE '%$district%' AND thana LIKE '%$thana%' ";
$result = mysqli_query($con,$sql);

$data = array();

foreach($result as $item){
    $name = $item['name'];
    $email = $item['email'];
    $password = $item['password'];
    $district = $item['district'];
    $thana = $item['thana'];
    $service = $item['service'];
    $category = $item['category'];
    $mobile = $item['mobile'];
    $description = $item['description'];
    
    $userinfo['name'] = $name;
    $userinfo['email'] = $email; 
    $userinfo['password'] = $password;
    $userinfo['district'] = $district;
    $userinfo['thana'] = $thana;
    $userinfo['service'] = $service;
    $userinfo['category'] = $category;
    $userinfo['mobile'] = $mobile;
    $userinfo['description'] = $description;
    
    
    array_push($data, $userinfo);
    
}

echo json_encode($data);

?>