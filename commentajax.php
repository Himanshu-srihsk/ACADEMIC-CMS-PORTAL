<?php
require_once("connection.php");
if(isset($_POST['user_comm']) && isset($_POST['user_from']) && isset($_POST['user_to']))
{
  $comment=$_POST['user_comm'];
  $user_from_email=$_POST['user_from'];
  $q=mysqli_query($conn,"select * from user where email='$user_from_email'");
$row=mysqli_fetch_array($q);
$user_from=$row['name'];
 $user_to=$_POST['user_to'];
 $q=mysqli_query($conn,"select * from user where name='$user_to'");
$row=mysqli_fetch_array($q);
  $user_to_email=$row['email'];
  //echo 'jokped';
  date_default_timezone_set('Asia/Kolkata');
$datetime = date('m/d/Y h:i:s a', time());

  $insert=mysqli_query($conn,"insert into chat (sendby,sendto,message,posttime) values('$user_from_email','$user_to_email','$comment','$datetime')");
}

?>