


<?php
session_start();
include("databaseconnection.php");
 


  $totalnooffood=$_SESSION['count'];

for($i=0;$i<$totalnooffood;$i++)
{
  $product=$_SESSION['cart'][$i]['item'];
  $quan=$_SESSION['cart'][$i]['quanity'];
 $individual= $_SESSION['cart'][$i]['price'];

      if(!empty($_SESSION['iid']))
      {
          $sssid=$_SESSION['iid'];
      }
      else
      {
      	 $sssid=$_COOKIE['id'];
      }


          $name="select name from customerinfo where id=$sssid ";
          $resname=mysqli_query($conn,$name);
           while($row=mysqli_fetch_array($resname))

 {
 	
 	$rname=$row['name'];
 }

       
         
          

  $sql="insert into order_list(id,name,product,quantity,individual,discount)"."values('$sssid','$rname','$product','$quan','$individual','0')";
  $sql2="insert into assigndeliveryman(id,product,quantity,deliverymanid,status)"."values('$sssid','$product','$quan',' ','pending')";

   $res=mysqli_query($conn,$sql);
    $res2=mysqli_query($conn,$sql2);



 }

 if(!$sql){"insert failed";}
if(!$res && !$res2)
        {
        	die("queri failed error.....!!!!!!!!");
        }

        else{ 


         
        
        	echo  "your order is taken<br><br>" ;
        	echo "<a href=menucard.php>HOME</a>";
         

    }

?>