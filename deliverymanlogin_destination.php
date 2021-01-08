<?php
include("databaseconnection.php");
session_start();



if(isset($_POST['submit']))
    {    

         $id=$_POST['id'];
    	
    	$pass=$_POST['password'];
    	$_SESSION['did']=$id;
    	

$sql="insert into deliveryman(id,pass)"."values('$id','$pass')";
        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        	echo"<a href=adminlogin.php> Home </a></h1>";
        }

        else{ echo "Login Successful";}
        echo"<a href=deliverymanlogin.php> Home </a></h1>";

    }

    ?>