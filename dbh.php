<?php
$conn = mysqli_connect("localhost", "root", "" ,"techtonic");

if(!$conn){

	die("connection failed: ".mysqli_connect_error());
}
?>