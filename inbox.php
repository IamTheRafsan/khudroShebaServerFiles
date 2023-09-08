<?php

$con = mysqli_connect("localhost", "id21054149_servvvv", "Evan12345!", "id21054149_servvvv");

$email = $_GET['e'];

$sql = "SELECT sender, receiver, message FROM message_table WHERE sender LIKE '$email' OR receiver LIKE '$email'"

?>