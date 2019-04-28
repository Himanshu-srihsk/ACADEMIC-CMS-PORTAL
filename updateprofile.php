<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
	
<?php
include('connection.php');
extract($_POST);
//echo $_SESSION['usertype'];
if(isset($update)){
	
	$uname=mysqli_real_escape_string($conn,$_POST["name"]);
$mob=mysqli_real_escape_string($conn,$_POST["mob"]);
$gen=mysqli_real_escape_string($conn,$_POST["gen"]);
$mm=$_POST['mm'];
$dd=$_POST['dd'];
$yy=$_POST['yy'];
$email=$_POST['email'];
//$imageName=$_FILES['img']['name'];

$name="/^[a-zA-Z\\s]*$/";
$number="/^[0-9]+$/";


if(empty($uname)||empty($mob)||empty($gen)
	||empty($mm)||empty($dd)||empty($yy)||empty($email))
{
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all fields</b>
</div>

";


}

else{
	
	
if(!preg_match($name,$uname)){
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>$uname is not valid</b>
</div>
";

}

if(!preg_match($number,$mob)){
echo"
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>Mobile number $mobile is not valid</b>
</div>
";

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

//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($pass);
//$utyp='STUDENT';
$utype='4';
$query="update user set name='$uname',mobile='$mob',gender='$gen',hobbies='$hob',image='$imageName',dob='$dob' where id='$uid';";
mysqli_query($conn,$query);

//upload image
//echo $email;
//move_uploaded_file($_FILES['img']['tmp_name'],"images/$email/".$_FILES['img']['name']);
if($_SESSION['usertype']==4){
	$path="../images/$email/".basename($_FILES["img"]["name"]);
}else{
	$path="images/$email/".basename($_FILES["img"]["name"]);
}

move_uploaded_file($image=$_FILES["img"]["tmp_name"],$path);

//$err="<font color='blue'>Registration successfull !!</font>";
echo "
<div class='alert alert-primary'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b> successfully Updated </b>
</div>
";

}
?>
<script>
	$("#update").click(function(){

	$.ajax({
		url:"student.php",
success: function (data) {
                       window.location.href="student.php";	
					  
                    }

	})

});
</script>

<div class="row">
		 <div class="col-md-1"></div>
		 <div class="col-md-10">

		 <div class="panel panel-info">
<div class="panel-heading">Update Profile </div>
<div class="panel-body">
<form method="post" enctype="multipart/form-data">
<div class="row">

		 <br><br>
<div class="col-md-12" id="login_msg">
<?php echo($err) ?>
</div>

 <?php
 $searchqueryparameter=$uid;
 $query="select * from user where id='$searchqueryparameter'";
 $execute=mysqli_query($conn,$query);
 while($datarows=mysqli_fetch_array($execute)){
$name=$datarows["name"];
$email=$datarows["email"];
$mobile=$datarows["mobile"];
$gender=$datarows["gender"];
$hobbies=$datarows["hobbies"];
$dob=$datarows["dob"];
$image=$datarows["image"];

 
 }
 ?>
 
</div>
<br>
<div class="row">
<div class="col-md-12">
<label><b>Enter Your name </b></label>
<input type="text"  name="name" id="name" value="<?php echo $name;?>" class="form-control">
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<label><b>Enter Your Email </b></label>
<input readonly="readonly" type="text"  name="email" id="email" value="<?php echo $email;?>" class="form-control">
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<label><b>Enter Your Mobile no. </b></label>
<input type="text" name="mob" id="mob" value="<?php echo $mobile;?>" class="form-control" >
</div>
</div>
<br>

<div class="row">
<div class="col-md-12">
<tr>
					<td><b>Select Your Gender</b></td><br>
					<Td>
				Male <input type="radio" name="gen" value="m" <?php if($gender =='m'){echo 'checked';} ?>/>   
				Female  <input type="radio" name="gen" value="f" <?php if($gender =='f'){echo 'checked';} ?>/>  
					</td>
				</tr>

</div>
</div>
<br>
<?php //echo $email; ?>
<div class="row">
<div class="col-md-12">
<tr><td><label for="imageselect"><span class="fieldinfo">Existing Profile pic:</span></label>
<?php if($_SESSION['usertype']==4){ ?>
<img src="../images/<?php echo $email; ?>/<?php echo $image; ?> " width=100px; height=50px;>
<?php }else{?>
<img src="images/<?php echo $email; ?>/<?php echo $image; ?> " width=100px; height=50px;>
<?php } ?>
</td></tr>
<br>
<tr>
				<td><label><b>Select Your Profile pic:</b></label></td>
          <td><input type="file" class="form-control" name="img" id="imageselect"></td>
				</tr>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<tr>
<?php $hobbies = explode (",", $hobbies);  ?>
					<td><b>Choose Your Hobbies</b></td><br>
					<Td>
					<input value="reading" type="checkbox" name="hob[]" 
					<?php foreach ($hobbies as $val) {
                                       if($val=='reading'){echo 'checked'; break;}
										   
                                  } ?>
					/>  Reading <br/>
					<input value="singin" type="checkbox" name="hob[]"
					<?php foreach ($hobbies as $val) {
                                       if($val=='singin'){echo 'checked'; break;}
										   
                                  } ?>
					/>   Singing <br/>
					<input value="playing" type="checkbox" name="hob[]"
					<?php foreach ($hobbies as $val) {
                                       if($val=='playing'){echo 'checked'; break;}
										   
                                  } ?>
					/>  Playing <br/>
					<input value="Dancing" type="checkbox" name="hob[]"
					<?php foreach ($hobbies as $val) {
                                       if($val=='Dancing'){echo 'checked'; break;}
										   
                                  } ?>
					/>  Dancing <br/>
					<input value="others" type="checkbox" name="hob[]"
					<?php foreach ($hobbies as $val) {
                                       if($val=='others'){echo 'checked'; break;}
										   
                                  } ?>
					/>  Others<br/>
					
					</td>
				</tr>
</div>
</div>

<tr>

<?php  $dob = explode ("-", $dob);?>
					<td><b>Date of Birth</b></td>
					<Td>
					<select name="yy">
					<option value="">YEAR
					<?php
					for($i=1950;$i<=2016;$i++)
					{
					?>
				
					<option <?php if($dob[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }
					?></option>
					

					</select>

					<select name="mm">
					<option value="">Month
					<?php
					for($i=1;$i<=12;$i++)
					{
					?>
				
					<option <?php if($dob[1]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }
					?>
					</option>
					
					</select>

<?php $dob[2] = explode (" ", $dob[2]);  ?>
					<select name="dd">
					<option value="">DAY
					<?php
					for($i=1;$i<=31;$i++)
					{
					?>
				
					<option <?php if($dob[2][0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }
					?>
					</option>
					

					</select>

					</td>
				</tr>
<p><br/></p>
<div class="row">
<div class="col-md-12">

<input name="update" type="submit" value="Update Profile" class="btn btn-lg btn-success btn-block">
</div>
</div>




</div>
</form>

		 
		 </div>
		 <div class="col-md-1"></div>
		 </div>
		 </div>
	