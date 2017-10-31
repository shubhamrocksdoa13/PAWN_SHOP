<?php
include 'dbh.php';

$first=$_POST['first'];
$uid=$_POST['uid'];
$pws=$_POST['pws'];

$sql = "INSERT INTO user (first, uid, pws) 
VALUES ('$first', '$uid', '$pws')";

$result = $conn->query($sql);

header("Location: dj.php");

?>