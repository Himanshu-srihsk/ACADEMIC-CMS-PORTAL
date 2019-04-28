<?php
require_once("connection.php");
if(isset($_POST['user_comm']) && isset($_POST['user_from']))
{
  $comment=$_POST['user_comm'];
  $user_from_email=$_POST['user_from'];
  $q=mysqli_query($conn,"select * from user where email='$user_from_email'");
$row=mysqli_fetch_array($q);
$user_from=$row['name'];
 
  date_default_timezone_set('Asia/Kolkata');
$datetime = date('m/d/Y h:i:s a', time());

  $insert=mysqli_query($conn,"insert into discussion (sendby,message,datetime) values('$user_from','$comment','$datetime')");
}

?>