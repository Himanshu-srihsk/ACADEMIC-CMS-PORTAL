<?php 
include('connection.php');
session_start();

$user=$_SESSION['user'];
$eid=$_GET['id'];
$q=mysqli_query($conn,"insert into attendevent(semail,eventid)values('$user','$eid')");
//header('location:student.php?page=events');
//echo $_GET['name'];

?><script>window.history.go(-1);</script>