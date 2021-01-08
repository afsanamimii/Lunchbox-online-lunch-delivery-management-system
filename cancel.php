
<?php
session_start();
unset($_SESSION['cart']);
$_SESSION['count'];
unset($_SESSION['count']);


echo "YOU HAVE CANCELED YOUR ORDER SUCESSFULLY";


        header("refresh:4; url=menucard.php");

?>