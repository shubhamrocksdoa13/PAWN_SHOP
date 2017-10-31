<?php
include 'dbh.php';

$uid = $_POST['uid'];
$pws = $_POST['pws'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pws='$pws'";
$result = $conn->query($sql);

if(!$row == $result->fetch_assoc()){
	echo "your username or password is incorrect";
}

else{
	echo "you are logged in";
}

//header("Location: dj.php");

?>