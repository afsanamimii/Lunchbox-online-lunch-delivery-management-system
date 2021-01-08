<?php
session_start();

 include("databaseconnection.php");
 ?>
 <?php

$id=$_POST['id'];
$_SESSION['iid']=$id;

 







$dpass='';
 $query="SELECT * FROM customerinfo where customerinfo.id='$id'";
 $result=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($result))

 {
 	
 	$dpass=$row['password'];
 	$rname=$row['name'];
 	 }
 


if(isset($_POST['login']))

{
	
$pass=$_POST['pass'];
$_SESSION['name']=$rname;

if(isset($_POST['remember']))
{
setCookie('id',$id,time()+3600);



}


if($dpass==$pass){


header("location:menucard.php");

}

else echo"wrong password";
	
}


elseif (isset($_POST['login2'])) {
	header("location:registration.php");
}


else echo"wrong password";
echo "<br><br>";
echo "<a href=customerlogin.php>Try again</a>";








?>