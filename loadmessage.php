<?php
include("connection.php");
session_start();
$user=$_SESSION['user'];
//echo $user;
//echo 'hi';
//$use=$p;
$p=$_SESSION["sendto"];
$q=mysqli_query($conn,"select * from user where name='$p'");
$row=mysqli_fetch_array($q);
  $user_to_email=$row['email'];
//echo $p;
$q=mysqli_query($conn,"select * from user where email='$user'");
$row=mysqli_fetch_array($q);
//echo $row['name'];
//echo $n;
//echo $p;
$e=$row['name'];
$senimage=$row['image'];
$q=mysqli_query($conn,"select * from user where name='$p'");
$row=mysqli_fetch_array($q);
$recimage=$row['image'];
$recemail=$row['email'];
$comm =mysqli_query($conn,"select * from chat where (sendby='$user'and sendto='$user_to_email') or (sendby='$user_to_email'and sendto='$user') order by posttime");
//$num=mysqli_num_rows($comm);

?>

<div class="card-body msg_card_body">
                              <?php if($p) {

                                while($row=mysqli_fetch_array($comm)){ 
								$sendby=$row['sendby'];
	                                $sendto=$row['sendto'];
	                                 $message=$row['message'];
                                     $time=$row['posttime'];
								//echo $sendby;
								//echo $sendto;
								?>
								<br/>
								<?php if($sendby==$user){  ?>
							<div class="d-flex justify-content-start mb-4">
								
								
								<div class="img_cont_msg">
<?php  
if($senimage!=null){
echo "<img src='images/$user/$senimage' class='rounded-circle user_img_msg'>" ;}
else{
	echo "<img src='images/avtar.JPEG' class='rounded-circle user_img_msg'>" ;
	
}
	?>							
								</div>
								<div class="msg_cotainer">
								
									<?php echo $message; ?>
									<span class="msg_time"><?php echo $time; ?></span>
								</div>
	</div><?php } ?>

<?php if($sendby==$user_to_email){ ?> 
<div class="d-flex justify-content-end mb-4">
                               <div class="msg_cotainerreceiver">								
									<?php echo $message; ?>
									<span class="msg_time"><?php echo $time;?></span>
								</div>
								
								<div class="img_cont_msg">
                             <?php 
							 if($recimage!=null){
                               echo "<img src='images/$recemail/$recimage' class='rounded-circle user_img_msg'>";
							 }else{
								  echo "<img src='images/avtar.JPEG' class='rounded-circle user_img_msg'>";
								 
							 }?>							
								</div>
								
	</div><?php } ?>	
								<?php   } }?>				        

</div>

	