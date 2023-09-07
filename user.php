<?php

$con = mysqli_connect("localhost","id21054149_servvvv","Evan12345!","id21054149_servvvv",);


$name = $_GET['n'];
$email = $_GET['e'];
$password = $_GET['p'];

if(mysqli_connect_errno())
    echo "could not connect".mysqli_connect_error();
else echo "Connected Successfully";


$sql = "INSERT INTO user_table (date,name,email,password) VALUES (NOW(),'$name','$email','$password')";

$result = mysqli_query($con,$sql);

if($result) echo "Data inserted";
else echo "Data was not inserted";

?>