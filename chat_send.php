<?php

$con = mysqli_connect("localhost","id21054149_servvvv","Evan12345!","id21054149_servvvv",);


$senderName = $_GET['sn'];
$receiverName = $_GET['rn'];
$sender = $_GET['s'];
$receiver = $_GET['r'];
$message = $_GET['m'];


if(mysqli_connect_errno())
    echo "could not connect".mysqli_connect_error();
else echo "Connected Successfully";


$sql = "INSERT INTO message_table (senderName,receiverName,sender,receiver,message) VALUES ('$senderName','$receiverName','$sender','$receiver','$message')";

$result = mysqli_query($con,$sql);

if($result) echo "Data inserted";
else echo "Data was not inserted";

?>
