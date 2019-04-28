<?php
extract($_POST);
if(isset($save))
{
$name=$uname;
$email=$umail;
$comment=mysqli_real_escape_string($conn,$_POST["comment"]);
date_default_timezone_set('Asia/Kolkata');
$datetime = date('m/d/Y h:i:s a', time());
//$datetime;
$postid=$_GET["post_id"];
if(empty($name) || empty($email) || empty($comment))
{
$err.= "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>All field are required</b>
</div>
";
//Redirect_to("Fullpost.php?id={$postid}");
}
elseif(strlen($comment)>500){
$err.= "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>only Max 500 characters allowed!</b>
</div>
";
//Redirect_to("Fullpost.php?id={$postid}");
}
else if($err == null){
$postidfromurl=$_GET["post_id"];
$execute=mysqli_query($conn,"insert into comments(datetime,name,email,comment,approvedBy,status,adminpanel_id)values('$datetime','$name','$email','$comment','pending','OFF','$postidfromurl')");
if($execute){
$err.= "
<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>Comment Added successfully</b>
</div>
";
//Redirect_to("Fullpost.php?id={$postid}");
}else{
$err.= "
<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<b>OOPS! something went wrong</b>
</div>
";
//Redirect_to("Fullpost.php?id={$postid}");
}
}
}
?>
<div id="fetch_fullpost">
<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="blog-header"><h1>Full Post </h1></div>
	<div class="col-md-12" id="login_msg">
<?php echo($err) ?>
</div>
 
 <?php
$postidfromurl=$_GET["post_id"];
$Viewquery="select * from adminpanel where id='$postidfromurl' order by id desc";
//echo $postidfromurl;
$execute=mysqli_query($conn,$Viewquery);
while($datarows=mysqli_fetch_array($execute)){
$postid=$datarows["id"];
$datetime=$datarows["datetime"];
$title=$datarows["title"];
$category=$datarows["category"];
$admin=$datarows["author"];

$image=$datarows["image"];
$post=$datarows["post"];
$userAccess=$datarows["userAccess"];
     ?>
	 
	<div class = "blogpost img-thumbnail">
		<?php
	$imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));

	
if($imageFileType == "mp4")
{
	
    echo"<video class='img-thumbnail img-responsive img-rounded' controls>
 <source src='Upload/".$image."' type='video/webm'>
 </video>";
} 
	else{
	?>
	 <img  class="img-thumbnail img-responsive img-rounded" src="Upload/<?php echo $image;?>" height="400px" width="400px" >
	<?php } ?>
	 <div class="caption">
	 <h1 id="heading"> <?php echo htmlentities($title); ?></h1>
	 <p class="description">Category:<?php echo htmlentities($category) ?> &nbsp; published on:<?php echo htmlentities($datetime) ?></p>
	 <p class="post"><?php echo nl2br($post) ?></p>
	 </div>
	
	  </div>
	  <br>
	 <?php }?>
	 
	 <br><br>
	 <span class="fieldinfo">Comments</span>
	
 <?php
	 $postidforcomments=$_GET["post_id"];
	 $Extractingcommentsquery="select * from comments where adminpanel_id='$postidforcomments' and status='ON'";
	 $execute=mysqli_query($conn,$Extractingcommentsquery);
	 while($datarows=mysqli_fetch_array($execute)){
	 $commentdate=$datarows["datetime"];
	  $commentername=$datarows["name"];
	   $commentbyusers=$datarows["comment"];
	 ?>

	 <div id="fetch_comments" class="commentblock">
	 <img style="margin-left:10px; margin-top:10px;" class="pull-left" src="images/comment.png" width=70px; height=70px;>
<p style="margin-left:90px;" class="commentinfo"><?php echo $commentername; ?></p>
	<p style="margin-left:90px;" class="description"><?php echo $commentdate; ?></p>
	<p style="margin-left:90px;" class="comment"><?php echo nl2br($commentbyusers); ?></p>
	 </div>
	
	 <hr>
	 <?php } ?>
	 <br><br>
	 
	
	 
	 <br><br>
	 
	 <div class="row">
		 <div class="col-md-12">
		 <div class="panel panel-info">
<div class="panel-heading">Share Your Thought about the Post</div>
<div class="panel-body">
<form method="post">
<div class="row">
<div class="col-md-12">
<label for="postarea"><span class="fieldinfo">Comment:</span></label>
<textarea class="form-control" name="comment" id="commentarea"></textarea>
</div>
</div>

<p><br/></p>
<div class="row">
<div class="col-md-12">
<input name="save" type="submit" value="Post Comment" class="btn btn-lg btn-success btn-block">
</div>
</div>
<br><br>

<div class="col-md-12" id="login_msg">
<?php /*echo($err)*/ ?>
</div>

</div>
</form> 
		 </div>
		 </div>
		</div>
	</div> <!--Main blog area ending-->
  
	
	<div class="col-md-2"></div>
	</div>
	
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
	

</script>	

	
 