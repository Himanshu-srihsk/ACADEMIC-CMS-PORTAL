<?php
global $going,$u;
extract($_POST);
if(isset($save))
{
 $org=mysqli_real_escape_string($conn,$_POST['org']);
 $time=mysqli_real_escape_string($conn,$_POST['when']);
 $offers=mysqli_real_escape_string($conn,$_POST['offers']);
 $place=mysqli_real_escape_string($conn,$_POST['place']);
 $addedby=$uname;
 date_default_timezone_set('Asia/Kolkata');
$datetime = date('m/d/Y h:i:s a', time());

$query="insert into events values('','$time','$org','$offers','$place','0','$addedby','$datetime')";
$r=mysqli_query($conn,$query);
$err.=  "
<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>events added !!</b>
</div>

";
}
?>
<style>
.back{
    background: url("images/events.JPG");
    background-size: cover;
    background-position:center;
    background-repeat: no-repeat;
    font-family: Lato;
    height: 100vh;
    filter: brightness(100%);
    margin-top: -20px;
}
#myDIV{
	display:none;
}

</style>


<script>
//toggle option for event form
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
	
	function Approve(id)
	{
		if(confirm("Are you really interested  ?"))
		{
		window.location.href="going_to_event.php?id="+id;
		
		
		}
	}
	
		function disapprove(id)
	{
		if(confirm("you have decided not to go :?"))
		{
		window.location.href="not_going.php?id="+id;
		}
	}
	
	
</script>


    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div id="content">
                        <h1>The Student Network Event</h1>
                        <h3>Scroll down to see exclusive offers</h3>
       <button class="btn btn-default btn-lg"><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#offers">Take me to the offers</a></button>        

<button type="button"   onclick="myFunction()"class="btn btn-lg btn-primary">Add New Events</button>
<br><br>
<div class="col-md-8" id="login_msg">
<?php echo($err) ?>
</div>
<div id="offers">
<div id="myDIV" class="event offers">
		 <div class="col-md-2"></div>
		 <div class="col-md-8">
		 <div class="panel panel-info">
<div class="panel-heading">Add New Event</div>
<div class="panel-body">
<form method="post" id="form1">
<div class="row">
<div class="col-md-12">
<input type="text" placeholder="Enter Organiser Name" id="org" name="org" class="form-control" required>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<input type="text" class="form-control" id="when" name="when" placeholder="Enter Date and Time for the event" required>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">

<input type="text" class="form-control" id="offers" name="offers" placeholder="Enter offers availabale" required>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">

<input type="text" class="form-control" id="place" name="place" placeholder="Enter place where event will take place" required>
</div>
</div>
<p><br/></p>
<div class="row">
<div class="col-md-12">
<input name="save" type="submit" value="Add this event" class="btn btn-lg btn-success btn-block">
</div>
</div>
</div>
</form> 
		 </div>
		 <div class="col-md-2"></div>
		 </div>
		 
		 </div>

</div>

	
					</div><!-- /.content -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
   </div>
    <div id="offers">
        <h3 class="events">Have an event to promote? Contact us at <a href="mailto:himanshukumar9334004134@gmail.com?Subject=Hello%20again" target="_top">info@studentnetwork.ie</a></h3>
    </div>
	
	<!--modal for add event-->


<!--end  modal-->



	<script>
 function autoRefresh_div()
 {
      $("#result").load("loadevents.php").show();// a function which will load data from other file after x seconds
  }
 
  setInterval('autoRefresh_div()', 2000);
</script>


<div id="result">
		                     <?php
			                    include("loadevents.php");
		                       ?>
	                     </div>
						 

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>	 