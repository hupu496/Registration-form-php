<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<h4><?php echo "Welcome ". $_SESSION['username']?></h4>
<br>
<h4><?php echo "password".$_SESSION['password']?></h4>
<h4><?php echo "Date time". $_SESSION['created_at']?></h4>
