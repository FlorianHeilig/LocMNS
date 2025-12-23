<?php
session_start();
$_SESSION["user_connected"]="";
session_destroy(); 
header("Location:index.php");
exit;
?>