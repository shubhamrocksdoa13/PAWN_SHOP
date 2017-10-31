<?php

$conn = mysqli_connect("localhost", "root", "", "palash");

if(!$conn)
{
	die("connection failed: ".mysqli_connect_error());
}
?>