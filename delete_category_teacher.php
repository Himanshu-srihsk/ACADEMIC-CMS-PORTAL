<?php 
include('connection.php');
$nid=$_GET['id'];
$q=mysqli_query($conn,"delete from category where id='$nid'");
header('location:teacher.php?page=category');
?>