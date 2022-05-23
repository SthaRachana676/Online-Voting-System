<?php
require_once "connection.php";
$vid = $_GET['id'];
echo $vid;
mysqli_query($con,"UPDATE `loginusers` SET `status` = '1' WHERE `voter_id` = '$vid';");

header("location:login.php");