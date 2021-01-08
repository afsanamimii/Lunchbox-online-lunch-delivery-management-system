<?php
session_start();








if(isset($_SESSION['cart']))
{
	echo "<table border=3 align=center height=150px>";

     echo "<th>PRODUCT NAME</td>";
     echo "<th>PRODUCT QUANTITY</td>";
     echo "<th>PRICE</td>";
 $totalnooffood=$_SESSION['count'];

for($i=0;$i<$totalnooffood;$i++)

{

  


	 $product=$_SESSION['cart'][$i]['item'];
	echo "<tr>";
 echo"<td>" .$product. "</td>";
 echo"<td>" .$quan=$_SESSION['cart'][$i]['quanity']."</td>";
 echo"<td>" .$individual= $_SESSION['cart'][$i]['price']."</td>";
 echo "</tr>";
 



}
echo "</table>";

echo "<br><br>";

echo "<center> <a href=menucard.php >HOME</a></center>";



	
}


else
{
echo "YOUR CART IS EMPTY <br><br><br>";
echo "<a href=menucard.php>HOME</a>";
}



?>