<?php


$host="localhost";
$dbuser="root";
$pass="";
$dbname="lunchbox";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("connextion failed....!!!!" .mysqli_connect_errno());
}


?>