
<?php
require('connection.php');
extract($_POST);
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=($_POST['pass']);
$mob=$_POST['mob'];
$gen=$_POST['gen'];
//$hob=$_POST['hob'];
$stuid=$_POST['stuid'];
$mm=$_POST['mm'];
$dd=$_POST['dd'];
$yy=$_POST['yy'];

$name="/^[a-zA-Z\\s]*$/";
$emailValidation="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number="/^[0-9]+$/";


if(empty($uname)||empty($email)||empty($pass)||empty($mob)||empty($gen)
	||empty($stuid)||empty($mm)||empty($dd)||empty($yy))
{
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all fields</b>
</div>

";

exit();
}

else{
	
	
if(!preg_match($name,$uname)){
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>$uname is not valid</b>
</div>
";
exit();
}
if(!preg_match($emailValidation,$email)){
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>$email is not valid</b>
</div>
";
exit();
}
if(strlen($pass)<5){
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>password is weak</b>
</div>
";

exit();
}

if(!preg_match($number,$mob)){
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>Mobile number $mobile is not valid</b>
</div>
";
exit();
}
if(strlen($mob)==10){

}else{
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>Mobile number should be 10 digit long</b>
</div>
";
}
}

	
	
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$email'");
$sql2=mysqli_query($conn,"select * from user where Student_ID='$stuid'");
$sql3=mysqli_query($conn,"select * from user where mobile='$mob'");

$r=mysqli_num_rows($sql);
$r2=mysqli_num_rows($sql2);
$r3=mysqli_num_rows($sql3);

if($r==true)
{
echo "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>Email Address already Exists try another one</b>
</div>
";
exit();
}
else if($r2==true)
{
echo "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>This Student Id already Exists try another one</b>
</div>
";
exit();	
}
else if($r3==true)
{
echo "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>This Mobile No already Exists try another one</b>
</div>
";
exit();
}


else{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];
if($imageName==null){$imageName="avtar.JPEG";}

//encrypt your password
$pass=md5($pass);
//$utyp='STUDENT';
$utype='1';
$query="insert into user(name,email,pass,mobile,gender,hobbies,image,dob,Student_id,usertype) values('$uname','$email','$pass','$mob','$gen','$hob','$imageName','$dob','$stuid','$utype')";
mysqli_query($conn,$query);

//upload image
$image=$_FILES['img']['name'];
if($image==null){$image="avtar.JPEG";}
mkdir("images/$email");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$email/$image");


//$err="<font color='blue'>Registration successfull !!</font>";

echo "
<div class='alert alert-primary'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>Registration successfull </b>
</div>
";
//exit();

}

?>




