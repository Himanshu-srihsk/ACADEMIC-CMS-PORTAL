<?php 
include('connection.php');
session_start();

$user=$_SESSION['user'];
$eid=$_GET['id'];
$q=mysqli_query($conn,"delete from attendevent where semail='$user' and eventid='$eid'");
//header('location:student.php?page=events');
?><script>window.history.go(-1);</script>