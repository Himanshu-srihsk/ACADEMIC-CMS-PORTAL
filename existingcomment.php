


	<div id='fetch_comments' class='commentblock'>
	<?php
require_once("connection.php");
	 $postidforcomments=$_GET["post_id"];
	 $Extractingcommentsquery="select * from comments where adminpanel_id='$postidforcomments' and status='ON'";
	 $execute=mysqli_query($conn,$Extractingcommentsquery);
	 while($datarows=mysqli_fetch_array($execute)){
	 $commentdate=$datarows["datetime"];
	  $commentername=$datarows["name"];
	   $commentbyusers=$datarows["comment"];
	 ?>
	 <img style='margin-left:10px; margin-top:10px;' class='pull-left' src='images/comment.png' width=70px; height=70px;>
<p style='margin-left:90px;' class='commentinfo'><?php echo $commentername; ?></p>
	<p style='margin-left:90px;' class='description'><?php echo $commentdate; ?></p>
	<p style='margin-left:90px;' class='comment'><?php echo nl2br($commentbyusers); ?></p>
	 <?php } ?>
	 </div>

	 <hr>
	 
	 
	 
	 