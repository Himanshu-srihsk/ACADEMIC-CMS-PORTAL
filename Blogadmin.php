<?php require_once("connection.php");?>
    
	<style>
	.img_cont{
			position: relative;
			height: 70px;
			width: 70px;
	}
	.fa {
  font-size: 25px;
  cursor: pointer;
  user-select: none;
	}
	</style>
	<div class="container-fluid"><!--container-->
	<div class="col-sm-1"></div>
	<div class="row">
	<div class="col-sm-8"><!--Main blog area-->

	<script>
	
	/*function like(id)
	{
		window.location.href="Bloglike.php?id="+id;
	
		
	}*/
	
	function like(id){
	$.ajax({
		url:"../Bloglike.php",
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
		url:"../Blogdislike.php",
method:"POST",
data:{dislike:1,postid:id},
success :function (data){
	//$(".badge2").html(data);
	//alert(data);
}
	})
}
	
	/*function dislike(id)
	{
		window.location.href="Blogdislike.php?id="+id;
	}*/
	</script>
	<?php

	
if(isset($_GET["category"])){
$category=$_GET["category"];
$Viewquery="select * from adminpanel where  category='$category'  order by id desc";
}
//The Default Query for Blog.php page page
else{
$Viewquery="select * from adminpanel  order by id desc";
}
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
 <source src='../Upload/".$image."' type='video/webm'>
 </video><div id='heading'> <b>Go to Read More To Play video</b></div>";
} 
	else{
	?>
	
	 <img class="img-thumbnail img-responsive img-rounded" src="../Upload/<?php echo $image;?>">
	<?php } ?>
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
	
	<a  target='_blank' href='index.php?page=fullpostadmin&post_id=".$postid."'><span class='btn btn-primary'>Read More &raquo;</span>
	</a></td>"; ?>
	  </div>
	  <br><br>
	 <?php }?>
	 

	   
	</div> <!--Main blog area ending-->
	
	
	<div class="col-sm-offset-1 col-sm-3"><!--side area-->
   <div class="panel panel-primary">
 <div class="panel-heading">
 <h2 class="panel-title">Categories</h2>
 </div>
 <div class="panel-body">
 <?php
 $Viewquery="select * from category order by id desc";
 $execute=mysqli_query($conn,$Viewquery);
 while($datarows=mysqli_fetch_array($execute)){
 $id=$datarows["id"];
 $category=$datarows["name"];
 ?>

 <a href="index.php?page=Blog&category=<?php echo $category ?>">
 <span style="margin-left:15px;" id="heading"><?php echo $category."<br>"; ?></span></a>
 <hr>
 <?php } ?>
 </div>
 </div>
 
 <br><br>
 <div class="panel panel-primary">
 <div class="panel-heading">
 <h2 class="panel-title">Recent Posts</h2>
 </div>
 <div class="panel-body">
<?php

$Viewquery="select * from adminpanel order by id desc limit 0,5";
$execute=mysqli_query($conn,$Viewquery);
 while($datarows=mysqli_fetch_array($execute)){
 $id=$datarows["id"];
 $category=$datarows["title"];
$datetime=$datarows["datetime"];
$image=$datarows["image"];
if(strlen($datetime)>11){$datetime=substr($datetime,0,11);}
?>
 <div>
 
 <img class="pull-left" style="margin-top:10px; margin-left:6px; position: relative;height: 70px; width: 70px; border-radius: 50%;" class="img-responsive img-thumbnail" src="../Upload/<?php echo $image; ?>" >
 
 <a href="index.php?page=fullpostadmin&post_id=<?php echo $id ?>">
 <p id="heading"><?php echo htmlentities($category); ?></p></a>

 <p class="description"><?php echo htmlentities($datetime);?></p>
 </div>
 <br><hr style="margin-top:1px;">
 <?php } ?> 
 </div>
 </div>

	</div>
	<div class="col-sm-1"></div>
	<!--side area Ending-->
	</div><!--Row ending-->
	
	</div><!--container ending--> 
<script>
function goBack() {
  window.history.back();
}
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>