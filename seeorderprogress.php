<?php
session_start();

 include("databaseconnection.php");
 if(isset($_SESSION['iid'])){
 $id=$_SESSION['iid'];

 $sql="SELECT status from assigndeliveryman
 where assigndeliveryman.id='$id'";


 
 $result=mysqli_query($conn,$sql);
 
 while($row=mysqli_fetch_array($result))

 {
 	
 	$dpass=$row['status'];
 	echo " Order Status: ".$dpass."<br><br>";
 	echo "<a href=menucard.php>Home</a>";
 	
 	 }

 	 
 	}

 	else{
 		echo "You haven't order anything yet<br>";
 	     echo "<a href=menucard.php>Order</a>";
 	}
 
 	

 	 


 
 ?>