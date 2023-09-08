<?php

$con = mysqli_connect("localhost", "id21054149_servvvv", "Evan12345!", "id21054149_servvvv");

$email = $_GET['e'];

$sql = "SELECT sender, receiver, message FROM message_table WHERE sender LIKE '$email' OR receiver LIKE '$email'";

$sql2 = "SELECT name, email, password, district, thana, service, category, mobile, description FROM user_table WHERE email LIKE '$email'";

$result = mysqli_query($con, $sql);
$reslut = mysqli_query($con, $sql2);

$data = array();
$data2 = array();

while ($item = mysqli_fetch_assoc($result))
{
    $data[]= $item;
}

while($item = mysqli_fetch_assoc($result2))
{
    $data2[] = $item;
}

$response = array(
    "messages" => $data,
    "users" => $data2
);

echo json_encode($response);

mysqli_close($con);
?>