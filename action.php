<?php include('connection.php'); 

//echo $p;
?>
<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
						
							<input type="text" placeholder="Search..." name="search" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					
					   
					<div class="card-body contacts_body">
						<ui class="contacts">
						<?php
					if(isset($search_btn)){
					$search=$_GET["search"];
$sql="select * from user 
where email like '%$search%' or name like '%$search%' order by id desc ";
					}else{?>   
						<?php
							$sql="select * from user order by status='1' desc ";
							$q=mysqli_query($conn,$sql);
					}
							while($row=mysqli_fetch_assoc($q)){
							?>
						<li class="active">
							<div class="d-flex bd-highlight">
							
								<div class="img_cont">
								<?php 
								//$sendby=$_GET['sendby'];
								
								$pagename=$_GET['name'];
								$name=$row['name'];
								$email=$row['email'];
								$image=$row['image'];
								$usert=$row['usertype'];
									if($usert=='1'){
	                                     $p='Student';
                                           }
                                if($usert=='2'){
	                                       $p='Parent';
                                         }
                                if($usert=='3'){
	                                       $p='Faculty';
                                         }
                                if($usert=='4'){
	                                    $p='Admin';
                                            }
								//echo $sendby;
								//if($image == null ){$image="avtar.JPEG";}
								//index.php?page=updatepost&post_id=".$row['id']."
								if($image !=null){
								echo"<a href='messenger.php?send=".$name."'>
<img  src='images/$email/$image' class='rounded-circle user_img'>
								</a>";}
								else{
								echo"<a href='messenger.php?send=".$name."'>
<img  src='images/avtar.JPEG' class='rounded-circle user_img'>
								</a>";	
								}
							?>
									<?php if($row['status']=='1'){?><span class="online_icon "></span>
									<?php } else{?><span class="online_icon offline"></span><?php } ?>
									
								</div>
								<div class="user_info">
								<span><?php echo $row['name'] ?> </span><br>
								(<?php echo $p ?>)
							<p><?php if($user==$row['email']) {echo 'you'; }else{echo $row['name']; } 
								?> <?php if($row['status']=='1'){?>are online<?php } else{?>are offline<?php } ?></p>
								</div>
							</div>
						</li>
					<?php }?>
						
						</ui>
					</div>
					
					<div class="card-footer"></div>
				</div>