<?php
session_start(); 

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

<!DOCTYPE html>
<html>
<head>
	<title>
		ADDING ORDER
	</title>
</head>
<body>

	<?php
       
       if(isset($_GET['submit2']))
       {
       	

       	for($x=0;$x<8;$x++)
    {

	
			$item[$x]="Null";
           $quantity[$x]=0;
       }
      
    
      $food=$_GET["choice"];
  $quantity1=$_GET["quantity1"];
 $quantity2=$_GET["quantity2"];
 $quantity3=$_GET["quantity3"];
 $quantity4=$_GET["quantity4"];
 $quantity5=$_GET["quantity5"];
       $quantity6=$_GET["quantity6"];
       $quantity7=$_GET["quantity7"];
       $quantity8=$_GET["quantity8"];
 
 $price=0.0;
 $c=count($food);
 $_SESSION['count']=$c;
 

 for($i=0;$i<$c;$i++)
 {

 	if($food[$i]==1)
 	{ if($quantity1>0){
 		$item[$i]="biriani";
 		$quantity[$i]= $quantity1;
 		$_SESSION['cart'][$i]=array('item'=>$item[$i],
 			'quanity'=>$quantity[$i],'price'=>(160*$quantity[$i]));
 	
 		$price=$price+(160*$quantity[$i]);



   echo" you have selected biriani ".$quantity1." plate<br><br>";

 	}
 }


 if($food[$i]==2)
 	{ 
 		if($quantity2>0){
 		$item[$i]="Rice";
 		$quantity[$i]= $quantity2;
 		$_SESSION['cart'][$i]=array('item'=>$item[$i],
 			'quanity'=>$quantity[$i],'price'=>(20*$quantity[$i]));
 		$price=$price+(20*$quantity[$i]);
   echo" you have selected Rice ".$quantity2." plate<br><br>";
 	}
 }



 if($food[$i]==3)
 	{ if($quantity3>0){
 		$item[$i]="CHICKEN_CURRY";
 		$quantity[$i]= $quantity3;
 		$_SESSION['cart'][$i]=array('item'=>$item[$i],
 			'quanity'=>$quantity[$i],'price'=>(120*$quantity[$i]));

 		$price=$price+(120*$quantity[$i]);
   echo" you have selected CKICKEN CURRY ".$quantity3." plate<br><br>";
 	}
 }


 if($food[$i]==4)
 	{ if($quantity4>0){
 		$item[$i]="fish_curry";
 		$quantity[$i]= $quantity4;
    $_SESSION['cart'][$i]=array('item'=>$item[$i],
      'quanity'=>$quantity[$i],'price'=>(100*$quantity[$i]));

 		$price=$price+(100*$quantity[$i]);
   echo" you have selected FISH CURRY".$quantity4." plate<br><br>";
 	}
 }


   if($food[$i]==5)
 	{
 		if($quantity5>0){
 		$item[$i]="tehari";
        
       
 		$quantity[$i]= $quantity5;
    $_SESSION['cart'][$i]=array('item'=>$item[$i],
      'quanity'=>$quantity[$i],'price'=>(200*$quantity[$i]));

 		$price=$price+(200*$quantity[$i]);
   echo" you have selected TEHARI ".$quantity5." plate<br><br>";}
 	}

 	if($food[$i]==6)
 	{if($quantity6>0){
 		$item[$i]="khichuri";
 		$quantity[$i]= $quantity6;
    $_SESSION['cart'][$i]=array('item'=>$item[$i],
      'quanity'=>$quantity[$i],'price'=>(120*$quantity[$i]));

 		$price=$price+(120*$quantity[$i]);
   echo" you have selected khichuri ".$quantity6." plate<br><br>";
 	}
	 	}


	 	if($food[$i]==7)
 	{
 		if($quantity7>0){

       $item[$i]="dal";
       $quantity[$i]= $quantity7;
       $_SESSION['cart'][$i]=array('item'=>$item[$i],
      'quanity'=>$quantity[$i],'price'=>(15*$quantity[$i]));
 		
 		$price=$price+(15*$quantity[$i]);
   echo" you have selected Dal".$quantity7." plate<br><br>";
 	}
 }

 	if($food[$i]==8)
 	{ if($quantity8>0){
 		$item[$i]="Beef_curry";
 		$quantity[$i]= $quantity8;
    
 	
$_SESSION['cart'][$i]=array('item'=>$item[$i],
      'quanity'=>$quantity[$i],'price'=>(180*$quantity[$i]));

 		$price=$price+(180*$quantity[$i]);
   echo" you have selected Beef curry ".$quantity8." plate<br><br>";
 	}
 }
	
}
echo "<b>total bill is<b>".$price."<br><br><br>";


echo " <a href=confirm.php>CONFIRM ORDER</a>";
echo"<br><br>";
echo " <a href=cancel.php>CANCEL ORDER</a>";




}











	?>

</body>
</html>