<?php
include "connection.php";
session_start();
extract($_POST);
if(isset($_POST["userLogin"]))
{
$e=$_POST["userEmail"];
$p=$_POST["userPassword"];

	if($e=="" || $p=="")
	{
	echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all fields</b>
</div>

";
	}
	else
	{
$email=mysqli_real_escape_string($conn,$_POST["userEmail"]);
$password=md5($_POST["userPassword"]);

$sql=mysqli_query($conn,"select * from user where email='$email' and pass='$password'  AND opt='1' AND (usertype =1 or usertype=2 or usertype=3 )");//AND opt='1'

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$email;
mysqli_query($conn,"update user set status='1' where email='$email'");
//$q=mysqli_query($conn,"select * from user where email='$admin'");
$row=mysqli_fetch_array($sql);
$usertype=$row['usertype'];
if($usertype==1){
echo 1;
}
if($usertype==2){
	echo 2;
}
if($usertype==3){
	echo 3;
}
//header('location:student');
}

else
{


//return '0';

echo "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Access Denied (Maybe wrong credential or your account not approve yet.)</b>
</div>

";

}
}
}

?>

