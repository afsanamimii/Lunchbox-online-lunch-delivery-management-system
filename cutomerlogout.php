<?php
session_start();

unset($_SESSION['iid']);

header("refresh:1; url=menu.php");

?>