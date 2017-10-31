<?php
session_start();

include 'dbhone.php';

$first=$_POST['first'];
$last=$_POST['last'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$sql= "INSERT INTO user1 (first,last,uid,pwd,address,phone)
VALUES('$first','$last','$uid','$pwd','$address','$phone')";

$result = $conn->query($sql);

header("location: register.php");

?>