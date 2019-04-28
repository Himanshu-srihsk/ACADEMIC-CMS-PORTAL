<?php
extract($_POST);
if(isset($save))
{
	$op=$oldpassword;
$np=$newpassword;
$cp=$confirmpassword;

	if($np=="" || $cp=="" || $op=="")
	{
		
		$err=  "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>fill all the fileds first</b>
</div>

";
	}
	else
	{
		$op=md5($oldpassword);
$np=md5($newpassword);
$cp=md5($confirmpassword);

$sql=mysqli_query($conn,"select * from user where id='$uid'");
$r=mysqli_num_rows($sql);
if($r==true)
{
while($row=mysqli_fetch_assoc($sql))
{
$oldpass=$row['pass'];
}
if($op!=$oldpass)
	{
		$err=  "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Old  password not matched. </b>
</div>

";
	}

	else if($np==$cp)
	{

	$sql=mysqli_query($conn,"UPDATE user SET pass='$np' WHERE id='$uid'");

	$err=  "
<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password updated </b>
</div>

";
	}
	else
	{
		$err=  "
<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>New  password not matched with Confirm Password </b>
</div>

";
	}
}

else
{
$err=  "
<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Wrong Old Password </b>
</div>

";
}
}
}

?>

<div class="row">
		 <div class="col-md-2"></div>
		 <div class="col-md-8">
		 <div class="panel panel-info">
<div class="panel-heading">Update Your Password</div>
<div class="panel-body">
<form method="post">
<div class="row">
<div class="col-md-12">
<input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="old password">
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="new password">
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">

<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="confirm password">
</div>
</div>

<p><br/></p>
<div class="row">
<div class="col-md-12">

<input name="save" type="submit" value="Update Password" class="btn btn-lg btn-success btn-block">
</div>
</div>
<br><br>

<div class="col-md-12" id="login_msg">
<?php echo($err) ?>
</div>

</div>
</form>

		 
		 </div>
		 <div class="col-md-2"></div>
		 </div>
		 
		 </div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>			 