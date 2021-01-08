<?php
include("databaseconnection.php");

$sql=" select * from assigndeliveryman
  
  where status='pending'";
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
    echo "<a href=monitororderbyadmin.php> confirm order</a>";
    echo "<br /><br /><hr />"; 

}
  

?>