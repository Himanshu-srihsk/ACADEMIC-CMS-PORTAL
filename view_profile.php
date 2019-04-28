	<script>
	function like(id){
	$.ajax({
		url:"Bloglike.php",
method:"POST",
data:{like:1,postid:id},
success :function (data){
	$(".badge1").html(data);
	//alert(data);
}
	})
}

	function dislike(id){
	$.ajax({
		url:"Blogdislike.php",
method:"POST",
data:{dislike:1,postid:id},
success :function (data){
	//$(".badge2").html(data);
	//alert(data);
}
	})
}
</script>
<?php //echo $_SESSION['usertype']; ?>
		 <div class="row">
		 <div class="col-md-2"></div>
		 <div class="col-md-8">

		 <div class="panel panel-info">
<div class="panel-heading">View User </div>
<div class="panel-body">
<form method="post" enctype="multipart/form-data">
<div class="row">

		 <br><br>
<div class="col-md-12" id="login_msg">
<?php echo($err) ?>
</div>

<div class="col-md-12">
<label><b>Users</b></label>
<Td ><?php require_once("connection.php");
$search = mysqli_query($conn,"select * from user"); ?>

					<select name="username" class="form-control" >
					<option value=" ">--- Select a user ---
				<?php 
				while($row=mysqli_fetch_array($search)){
				 ?> 
				 <option><?php echo $row['name'];?></option>
				 
				<?php }
					?>
					</option>
					</select>
					</td>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">

<input name="save" type="submit" value="Search" class="btn btn-lg btn-success">
</div>
</div>
</div>
</form>

</div>
		 <div class="col-md-2"></div>
		 </div>
		 </div>
	

<!--user information-->




	
<?php
require_once("connection.php");
extract($_POST);
if(isset($save)){
$username=$_POST['username'];
//echo $username;
$Viewquery="select * from user where name='$username'";
$execute=mysqli_query($conn,$Viewquery);
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
<div class="row">
		 <div class="col-md-2"></div>
		 <div class="col-md-8">

		 <div class="panel panel-info">
		 <div class="panel-heading"> User Profile</div>
<div class="panel-body">
	<div class="row">
<div class="col-md-12">
<label><b> User name </b></label>
<input type="text"  name="name" id="name" value="<?php echo $name;?>" class="form-control" disabled>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<label><b> User Email </b></label>
<input readonly="readonly" type="text"  name="email" id="email" value="<?php echo $email;?>" class="form-control">
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<label><b>User Mobile no. </b></label>
<input readonly="readonly" type="text" name="mob" id="mob" value="<?php echo $mobile;?>" class="form-control" >
</div>
</div>
<br>

<div class="row">
<div class="col-md-12">
<tr>
					<td><b> Gender</b></td><br>
					<Td>
				Male <input type="radio" name="gen" value="m" disabled <?php if($gender =='m'){echo 'checked';} ?> />   
				Female  <input type="radio" name="gen" value="f" disabled <?php if($gender =='f'){echo 'checked';} ?>/>  
					</td>
				</tr>

</div>
</div>
<br>

<div class="row">
<div class="col-md-12">
<tr><td><label for="imageselect"><span class="fieldinfo">User Profile pic:</span></label>
<img src="images/<?php echo $email; ?>/<?php echo $image; ?> " width=100px; height=50px;></td></tr>

</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<tr>
<?php $hobbies = explode (",", $hobbies);  ?>
					<td><b>User Hobbies</b></td><br>
					<Td>
					<?php  foreach ($hobbies as $val) {
                                       echo $val;
										echo ',';   
                                  } ?>
					</td>
				</tr>
</div>
</div>

<tr>

<?php  $dob = explode ("-", $dob);?>
					<td><b>Date of Birth</b></td>
					<Td>
				     <?php echo $dob[0] ;
					        echo '-';
							echo $dob[1];
							echo '-';
							echo $dob[2][0];
							?>

					</td>
				</tr>
<p><br/></p>
</div>

</div>
		 <div class="col-md-2"></div>
		 </div>
		 </div>
	 <div class="row">
		 <div class="col-md-2"></div>
		 <div class="col-md-8">

		 <div class="panel panel-info">
		 <div class="panel-heading"> User Post</div>
<div class="panel-body">
	
<?php
$username=$_POST['username'];
//echo $username;
//$sql=mysqli_query($conn,"select * from user where name='$username'");
$Viewquery="select * from adminpanel where author='$username'  order by id desc";
$execute=mysqli_query($conn,$Viewquery);
while($datarows=mysqli_fetch_array($execute)){
$postid=$datarows["id"];
$datetime=$datarows["datetime"];
$title=$datarows["title"];
$category=$datarows["category"];
$author=$datarows["author"];

$image=$datarows["image"];
$post=$datarows["post"];
?>
	<div class = "blogpost img-thumbnail">
	
	
	
	<?php
	$imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));

	
if($imageFileType == "mp4")
{
	
    echo"<video width='400' height='400' alt='video'>
 <source src='Upload/".$image."' type='video/webm'>
 </video><div id='heading'> <b>Go to Read More To Play video</b></div>";
} 
	else{
	?>
	<?php if($_SESSION['usertype']==4){?>
<img class="img-thumbnail img-responsive img-rounded" src="../Upload/<?php echo $image;?>">
	<?php }else{ ?>
	<img class="img-thumbnail img-responsive img-rounded" src="Upload/<?php echo $image;?>">
	<?php }} ?>
	 <div class="caption">
	 <h1 id="heading">
<a href="javascript:like('<?php echo $postid; ?>')">
   <i class="fa fa-thumbs-up" aria-hidden="true"></i><span class="badge">
   <!--<div class="badge1"></div>-->
   <?php 
   $q=mysqli_query($conn,"select * from likepage  where postid='$postid' and likeno=1");
$r=mysqli_num_rows($q);
echo "$r";
   ?>
   
   </span></a>
   
<a href="javascript:dislike('<?php echo $postid; ?>')"> 
    <i class="fa fa-thumbs-down" aria-hidden="true"></i><span class="badge">
	<?php 
   $q=mysqli_query($conn,"select * from likepage  where postid='$postid' and dislikeno=1");
$r=mysqli_num_rows($q);
echo "$r";
   ?>
	</span></a>

	 <?php echo htmlentities($title); ?></h1>
	 
	 <p class="description">Category:<?php echo htmlentities($category) ?> &nbsp; published on:<?php echo htmlentities($datetime) ?>
	 
	 <?php
$queryapproved="select count(*) from comments where adminpanel_id='$postid' and status='ON'";
$executeapproved=mysqli_query($conn,$queryapproved);
$rowapproved=mysqli_fetch_array($executeapproved);
$TotalApproved=array_shift($rowapproved);
if($TotalApproved>0){
?>
<button type="button" class="btn  badge  btn-sm float-sm-right responsive-width">
    Comments:<?php echo $TotalApproved;?>
</button>
<?php } ?>
	 
	 </p>
	 <p class="post"><?php  
	 if(strlen($post)>150)
	 {
	 $post=substr($post,0,150).'...';
	 }
	 echo $post ?></p>
	 </div>
	<?php echo "<Td>
	<a  target='_blank' href='student.php?page=fullpost&post_id=".$postid."'><span class='btn btn-primary'>Read More &raquo;</span>
	</a></td>"; ?>
	  </div>
	  <br><br>
	 <?php }?>
<?php } ?>


		 
		 </div>
		 <div class="col-md-2"></div>
		 </div>
		 </div></div>


		 
		 



<!--end--->	

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>			 