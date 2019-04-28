<?php
include('connection.php');
extract($_POST);
if(isset($save)){
	

//image
$imageName=$_FILES['img']['name'];

//$utyp='STUDENT';
$utype='1';
$query="update user set image='$imageName' where id='$uid';";
mysqli_query($conn,$query);

//upload image
//echo $email;
$path="images/$umail/".basename($_FILES["img"]["name"]);
move_uploaded_file($image=$_FILES["img"]["tmp_name"],$path);

echo "
<div class='alert alert-primary'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b> successfully Updated </b>
</div>
";

}

?>

<div class="row">
		 <div class="col-md-1"></div>
		 <div class="col-md-10">

		 <div class="panel panel-info">
<div class="panel-heading">Update Profile Pic</div>
<div class="panel-body">
<form method="post" enctype="multipart/form-data">
<div class="row">

		 <br><br>
<div class="col-md-12" id="login_msg">
<?php echo($err) ?>
</div>


 
</div>




<div class="row">
<div class="col-md-12">
<tr>
				<td><label><b>Select Your Profile pic:</b></label></td>
          <td><input type="file" class="form-control" name="img" id="imageselect"></td>
				</tr>
</div>
</div>

<br><br>
<div class="row">
<div class="col-md-12">

<input name="save" type="submit" value="Update Profile" class="btn btn-lg btn-success ">
</div>
</div>




</div>
</form>

		 
		 </div>
		 <div class="col-md-1"></div>
		 </div>
		 </div>
		 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
	
	
</script>

