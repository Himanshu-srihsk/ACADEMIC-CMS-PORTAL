<!--https://bootsnipp.com/snippets/nNg98-->
<?php 

session_start();
include('connection.php');
$user=$_SESSION['user'];
$_SESSION['usertype']=1;

if($user=="")
{
header('location:index.php');
}

$q=mysqli_query($conn,"select * from user where email='$user'");
$row=mysqli_fetch_array($q);
$usertype=$row['usertype'];
if($usertype==4)
{
header('location:/dir/task/admin/index.php');
}
if($usertype==2)
{
header('location:parent.php');
}
if($usertype==3)
{
header('location:teacher.php');
}

$q=mysqli_query($conn,"select * from user where email='$user'");
$rr=mysqli_num_rows($q);
if($rr)
{
while($row=mysqli_fetch_assoc($q))
	{
$uid=$row['id'];
$uname=$row['name'];
$umail=$row['email'];
$umob=$row['mobile'];
$utyp=$row['usertype'];
$uimg=$row['image'];
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>College Social Network</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   <link rel="stylesheet" href="css/adminstyles.css">
   <link rel="stylesheet" href="css/publicstyle.css">
   <!--<link href="css/dashboard.css" rel="stylesheet">-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	
	
	
	<style type="text/css">
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 120px;
	
  
font-family:Bitter,Georgia,"Times New Roman",Times,serif;
font-size:1.5em;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}



#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
	text-decoration:none;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #1a242f;
}





/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 60px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #222;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
		background-color: #244050;
	 height: 100%;
                overflow-y:auto;
		
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
		
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #1a242f !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
  
  
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
}

</style>
<!-- for messenger styling-->

	</head>

  
<body>
<div id="wrapper">
    <!-- Navigation -->
	
    <nav class="navbar   navbar-inverse bg-light navbar-fixed-top cart" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">	  
    
            </a>
        </div>
   
 
  <ul class="navbar-nav mr-auto">
         <div style="align:left">  
STUDENT PAGE:-&nbsp; <i class="fab fa-adn"></i>&nbsp;Hello <?php echo $uname;?> &nbsp;
       	</div>	  
       </ul>   
       <div>
        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout&nbsp;</a>
      </div>
  

    
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse ">
            <ul class="nav navbar-nav side-nav">
			
			<li>
			<?php 
			$q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <li><a href="student.php?page=update_profile"><img title="Update Your profile pic Click here" style="border-radius:50px" src="Upload/avtar.JPEG" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="student.php?page=update_profile"><img title="Update Your profile pic Click here"  style="border-radius:50px" src="images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			?>
			</li>
			<li>
                <a class="nav-link" data-toggle="tooltip" title="Home Page!" href="student.php"><span style="white-space: nowrap"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home &nbsp;</span></a>
  </li>
  
  <li>
  <a class="nav-link" data-toggle="tooltip" title="View Others/Own Profile!" href="student.php?page=view_profile"><span style="white-space: nowrap"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;View profile &nbsp;</span></a>
  </li>
   <li>
  <a class="nav-link" data-toggle="tooltip" title="Update Your Password!" href="student.php?page=update_password"><span style="white-space: nowrap"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Update password &nbsp;</span></a>
  </li>
  
  <li>
  <a class="nav-link" data-toggle="tooltip" title="See all notifications!" href="student.php?page=notification"><span style="white-space: nowrap"><i class="fas fa-comments"></i>&nbsp;&nbsp;See Notificatios&nbsp;</span></a>
</li><li>
  <a class="nav-link" data-toggle="tooltip" title="chat privately!" href="messenger.php?sendby='<?php echo $uname ?>'"><span style="white-space: nowrap"><i class="fas fa-angle-double-down"></i>&nbsp;Messenger&nbsp;</span></a>
  </li><li>
  <a class="nav-link" data-toggle="tooltip" title="Discussion Form!" href="groupdiscussion.php"><span style="white-space: nowrap"><i class='far fa-window-restore'></i>&nbsp;Group discussion&nbsp;</span></a>
  </li><li>
  <a class="nav-link" data-toggle="tooltip" title="Look or Add Events!" href="student.php?page=events"><span style="white-space: nowrap"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Events&nbsp;</span></a>
  </li><li>
  <a class="nav-link" data-toggle="tooltip" title="Job Portal!" href="student.php?page=jobportal"><span style="white-space: nowrap"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Job Portal&nbsp;</span></a>
            </li>
			</ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

	<br><br><br>
	<div class="col-md-12 main">
<?php 
		  $page= $_GET['page'];
		  if($page!="")
		  {
		
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="update_profile")
			{
			include('updateprofile.php');
			}
			if($page=="notification")
			{
				include('notification.php');
			
			}
			
			if($page=="updatepost")
			{
				include('updatepost.php');
			
			}
			if($page=="view_profile"){
				
				include('view_profile.php');
			}
			if($page=="fullpost")
			{
				include('fullpost.php');
				
			
			}
			
			
			if($page=="addnewpost")
			{
				include('addnewpost.php');
			
			}
			if($page=="allUserNotice")
			{
				include('allUserNotice.php');
			
			}
			if($page=="storage")
			{
				include('storage.php');
			
			}
			if($page=="events")
			{
				include('events.php');
				                  
			
			}
			if($page=="Blog")
			{
				include('Blog.php');
			
			}
			if($page=="jobportal")
			{
				include('jobportal.php');
			
			}
			if($page=="category")
			{
				include('category.php');
			
			}
			if($page=="messenger")
			{
				include('messenger.php');
			
			}
			if($page=="comments")
			{
				include('comments.php');
			
			}
			if($page=="addjobcategory")
			{
				include('addjobcategory.php');
			
			}
			if($page=="Addjobpost")
			{
				include('Addjobpost.php');
			
			}
			if($page=="jobpost")
			{
				include('jobpost.php');
			
			}
		
		  }
	else{
?>	
<div id="fetch_Blog"></div>
<?php /*include('Blog.php');*/?>

  <?php } ?></div>
  
	
	

  
				
            </div>
            <!-- /.row -->
        
  
	
  </body>
</html>


<script>
$(document).ready(function(){

//fetch_events();
fetch_Blog();
setInterval(function(){
fetch_Blog();
//fetch_events();	
},2000);

function fetch_Blog(){
	$.ajax({
		url:"Blog.php",
method:"POST",
data:{usertype:1},
success :function (data){
	$("#fetch_Blog").html(data);
}
	})
}

})

 
</script>


