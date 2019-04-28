<?php 
include "connection.php";
session_start();
$email=$_SESSION['user'];
mysqli_query($conn,"update user set status='0' where email='$email'");
unset($_SESSION['user']);
header('location:index.php');
?>