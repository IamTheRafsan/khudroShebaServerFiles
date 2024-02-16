<?php

$con = mysqli_connect("localhost","id21054149_servvvv","Evan12345!","id21054149_servvvv",);

$userEmail = $_GET['ue'];
$xEmail = $_GET['xe'];

$sql = "SELECT * FROM `message_table` WHERE (`sender` LIKE '$userEmail' AND `receiver` LIKE '$xEmail') OR (`sender` LIKE '$xEmail' AND `receiver` LIKE '$userEmail')";


$result = mysqli_query($con,$sql);

$data = array();

foreach($result as $item){
    $senderName = $item['senderName'];
    $receiverName = $item['receiverName'];
    $sender = $item['sender'];
    $receiver = $item['receiver'];
    $message = $item['message'];
    $date = $item['date'];
    
    
    
    $userinfo['senderName'] = $senderName;
    $userinfo['receiverName'] = $receiverName; 
    $userinfo['sender'] = $sender;
    $userinfo['receiver'] = $receiver;
    $userinfo['message'] = $message;
    $userinfo['date'] = $date;
    
    
    
    array_push($data, $userinfo);
    
}


echo json_encode($data);

?>
