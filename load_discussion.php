<?php
include("connection.php");

$comm =mysqli_query($conn,"select * from discussion order by id");


?>

<div class="card-body msg_card_body">
                              <?php 
                                $i=0;
								
                                while($row=mysqli_fetch_array($comm)){ 
								$sendby=$row['sendby'];	                           
	                                 $message=$row['message'];
                                     $time=$row['datetime'];
							$q=mysqli_query($conn,"select * from user where name='$sendby'");
                                    $drow=mysqli_fetch_array($q);
								$senimage=$drow['image'];
								$user1=$drow['email'];
								//echo $user1;
								?>
								<br/>
							
<?php if($i==0) {?>							
							<div class="d-flex justify-content-start mb-4">
								
								
								<div class="img_cont_msg">
<?php  
if($senimage!=null){
echo "<img src='images/$user1/$senimage' class='rounded-circle user_img_msg'>" ;}
else{
	echo "<img src='images/avtar.JPEG' class='rounded-circle user_img_msg'>" ;
	
} echo $sendby ;?>
								
								</div>
								
								<div class="msg_cotainer">
								
									<?php echo $message; ?>
									<span class="msg_time"><?php echo $time; ?></span>
								</div>
</div><?php $i=1; } else{?>
 
<!------>
<div class="d-flex justify-content-end mb-4">
                               <div class="msg_cotainerreceiver">								
									<?php echo $message; ?>
									<span class="msg_time"><?php echo $time;?></span>
								</div>
								
								<div class="img_cont_msg">
                             <?php 
							 if($senimage!=null){
                               echo "<img src='images/$user1/$senimage' class='rounded-circle user_img_msg'>";
							 }else{
								  echo "<img src='images/avtar.JPEG' class='rounded-circle user_img_msg'>";
								 
							 }echo $sendby ;?>							
								</div>
								
</div><?php $i=0;} ?>

								<?php   } ?>				        

</div>

	