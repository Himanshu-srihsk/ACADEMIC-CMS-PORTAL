<?php
session_start();
include('connection.php');
$admin= $_SESSION['user'];
if($admin=="")
{
header('location:/dir/task/admin/login.php');
}
//$sendby=$_GET['sendby'];
//$val=$sendby;
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<style>
	
		body,html{
			height: 80%;
			margin: 0;
			margin-top:30px;
			background: #7F7FD5;
	       background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
	        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
		}

		.chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		.card{
			height: 500px;
			border-radius: 15px !important;
			background-color: rgba(0,0,0,0.4) !important;
		}
		.contacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}
	 .card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
	}
		.container{
			align-content: center;
		}
		.search{
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
		}
		.search:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.type_msg{
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
			.type_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.attach_btn{
	border-radius: 15px 0 0 15px !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
	border-radius: 0 15px 15px 0 !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.search_btn{
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.contacts{
			list-style: none;
			padding: 0;
		}
		.contacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}
	.active{
			background-color: rgba(0,0,0,0.3);
	}
		.user_img{
			height: 70px;
			width: 70px;
			border:1.5px solid #f5f6fa;
		
		}
		.user_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.img_cont{
			position: relative;
			height: 70px;
			width: 70px;
	}
	.img_cont_msg{
			height: 40px;
			width: 40px;
	}
	.online_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.offline{
		background-color: #c23616 !important;
	}
	.user_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.user_info span{
		font-size: 20px;
		color: white;
	}
	.user_info p{
	font-size: 10px;
	color: rgba(255,255,255,0.6);
	}
	.video_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.video_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
	}
	.msg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 25px;
		background-color: #82ccdd;
		padding: 10px;
		position: relative;
	}
	.msg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #78e08f;
		padding: 10px;
		position: relative;
	}
	.msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_head{
		position: relative;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}
	</style>
	<script>
		$(document).ready(function(){
$('#action_menu_btn').click(function(){
	$('.action_menu').toggle();
});
	});
	</script>
	
	<script>
$(document).ready(function()
    {
        $(document).bind('keypress', function(e) {
            if(e.keyCode==13){
                 $('#my_form').submit();
				 $('#comment').val("");
             }
        });
	});
</script>
	
	<script>
 function autoRefresh_div()
 {
      $("#result").load("loadmessage.php").show();// a function which will load data from other file after x seconds
  }
 
  setInterval('autoRefresh_div()', 2000);
</script>


<script>
 function online_status()
 {
      $("#online_status").load("action.php").show();// a function which will load data from other file after x seconds
  }
 
  setInterval('online_status()', 30000);
</script>

<script type="text/javascript">
function post()
{
	
  var comment = document.getElementById("comment").value;
  var sendfrom = document.getElementById("sendfrom").value;
  var sendto = document.getElementById("sendto").value;
  if(comment && sendfrom && sendto)
  {
    $.ajax
    ({
      type: 'post',
      url: 'commentajax.php',
      data: 
      {
         user_comm:comment,
	     user_from:sendfrom,
		 user_to:sendto
      },
      success: function (response) 
      {
		  //alert(response);
	    document.getElementById("comment").value="";
      }
    });
  }
  
  return false;
}
</script>	
	</head>	
	<body>
	
	<a href="/dir/task/admin/index.php"><button class="btn"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
		&nbsp;Home &nbsp;<?php  ?>
		<?php 
		$admin= $_SESSION['user'];
		$q=mysqli_query($conn,"select * from user where email='$admin'");
$row=mysqli_fetch_array($q);
		$name=$row['name'];
		echo $name;
		$usertype=$row['usertype'];
		?>
		</button></a>
		
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div id="online_status">
				
				<?php include('action.php'); ?>
				</div>
					
					<div class="card-footer"></div>
				</div></div>
				<!--online/offline end section-->
				<!--chat section-->
				
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
							
							<?php $p=$_GET['send'];
									include('connection.php');
									$sql="select * from user where name='$p'";
							$q=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($q)){
									
									$image=$row['image'];
									$email=$row['email'];
									if($image!=null){
									echo "<img src='images/$email/$image' class='rounded-circle user_img'>";}
									else{
								echo "<img src='images/avtar.JPEG' class='rounded-circle user_img'>" ;
									}
									?>
							<span class="online_icon"></span>
								</div>
							<?php } ?>
							
								<div class="user_info">
									<?php 
								$p=$_GET['send'];
								session_start();
								$_SESSION["sendto"] =$p;
		                         if(isset($p)){
									echo "<span>Chat with $p</span> 
									<p>1767 Messages</p>";
                                        }
                                  ?>
								</div>
								
								
						
							</div>
							
						</div>
						
						<div class="card-body msg_card_body">
						<div id="result">
		                     <?php
							 $p=$_GET['send'];
							 echo $p;
			                    include("loadmessage.php");
		                       ?>
	                     </div>
						</div>
						
						<div class="card-footer">
						<form method='post' action="#" onsubmit="return post();" id="my_form" name="my_form">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<input type="text" style="display:none" id="sendto" value="<?php echo $p; ?>">
								<input type="text" style="display:none" id="sendfrom" value="<?php echo $user; ?>">
								<textarea name="comment" id="comment" class="form-control type_msg" placeholder="Type your message..."></textarea>
								
									<button type="submit" value="Send" id="btn" class="btn badge"><i class="fas fa-location-arrow"></i></button>
								
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
