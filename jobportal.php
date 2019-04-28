
<style>
hr {
  display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0; 
}
.joblink{
    color: #123455;
}
</style>
<div class="col-md-1"></div>
<div class="col-md-10">
<hr>
<h1><center>Job Section</center></h1>
<hr>
<br>
<?php echo($err) ?>
<br><br>
<div class="table-responsive">
<table class="table table-striped table-hover">
<tr>
<th>Sr No</th>
<th> Job Section</th>
<th>Number of active jobs</Th>
</tr>
<?php
$Viewquery="select * from jobcategory order by datetime desc";
$execute=mysqli_query($conn,$Viewquery);
$srno=0;
while($datarows=mysqli_fetch_array($execute)){
$jobcatid=$datarows["jobcatid"];
$datetime=$datarows["datetime"];
$jobcatname=$datarows["jobcatname"]; 
$jobcatdescription=$datarows["jobcatdescription"];

$srno++;
?>
<tr>
<td><?php echo $srno; ?></td>


<Td><h3 class="joblink">

<?php $pagename=$_GET['name'];
echo "
	<a href='$pagename?page=jobpost&post_id=".$jobcatid."'>
	$jobcatname
	</a></h3> :-$jobcatdescription"; ?></td>

	
<?php
$View=mysqli_query($conn,"select * from jobpost where jobCat ='$jobcatid'");
$count=mysqli_num_rows($View);
?>	

<td><?php echo $count ?></td>
</tr>
<?php }?>
</table>


</div>

</div><!--Ending of main area-->
<div class="col-md-1"></div>