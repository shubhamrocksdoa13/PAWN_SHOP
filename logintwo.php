<?php
session_start();
include 'dbhone.php';

$uid=$_POST['uid'];
$pwd=$_POST['pwd'];


$sql= "SELECT * FROM user1 WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if(!mysql_num_rows($result))
{
	echo "YOUR USENAME OR PASSWORD IS INCOORECT!!!!!";
}
else{
	$_session['id'] = $row['id'];
}

header("location:mainpage.php");

?>

