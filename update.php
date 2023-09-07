<?php

$con = mysqli_connect("localhost","id21054149_servvvv","Evan12345!","id21054149_servvvv");


$name = $_GET['n'];
$email = $_GET['e'];
$password = $_GET['p'];
$district = $_GET['di'];
$thana = $_GET['th'];
$service = $_GET['s'];
$category = $_GET['c'];
$mobile = $_GET['m'];
$description = $_GET['z'];

if(mysqli_connect_errno())
    echo "could not connect".mysqli_connect_error();
else echo "Connected Successfully";


$sql = "UPDATE user_table SET district='$district', thana='$thana', service='$service', category='$category', mobile='$mobile', description='$description' WHERE email='$email' AND password='$password'";

$result = mysqli_query($con,$sql);

if($result) echo "Data updated succussfully";
else echo "Data was not updated";

?>