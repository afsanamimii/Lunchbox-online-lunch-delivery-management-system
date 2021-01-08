<?php
include("databaseconnection.php");

  if(isset($_POST['submit'] ))
  {
  $did=$_POST['deliveryname'];
  $cid=$_POST['customername'];
  $sql=" update assigndeliveryman
  set status='Assigned',deliverymanid=$did
  where id= $cid;";
  $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }
        else
        	echo "Deliveryman ". $did." is assigned to ".$cid."<br><br>";
        echo"<a href=trackpendingorderbyadmin.php>see other order</a>";


  }
 ?>

