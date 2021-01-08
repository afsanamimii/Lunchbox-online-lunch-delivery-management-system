<?php
session_start();


include("databaseconnection.php");

$sql=" select * from assigndeliveryman
  
  where deliverymanid='123'";
   $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }
        else

        	 while($row=mysqli_fetch_assoc($res)){
        	foreach($row as $key=>$value)
    {
        echo" {$key}:"."{$value}";
          echo "||";

    
    }
    echo "<a href=formdelivery.php>TURN ON DELIVERY STATUS</a>";
    echo "<br /><br /><hr />"; 

}
  

?>