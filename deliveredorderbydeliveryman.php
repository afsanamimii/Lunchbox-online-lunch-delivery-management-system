<?php
include("databaseconnection.php");

  $cid=$_POST['customername'];
  $sql=" update assigndeliveryman
  set status='DELIVERED'
  where id= $cid;";
  $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }
        else
        	echo "ORDER is DELIVERED to ".$cid;


  
 ?>

