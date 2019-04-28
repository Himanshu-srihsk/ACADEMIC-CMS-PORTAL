

<script>
function Deletecategory(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_category.php?id="+id;
		}
	}
</script>
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
<div class="col-md-12">
<hr>
<h1><center>Job Section</center></h1>
<hr>
<br><br>
<div class="table-responsive">

<table class="table table-striped table-hover">
<tr>
<th>Sr No</th>
<th> Job Title</th>
<th>Company</th>
<th> Date Posted</th>
<th>Salary(&#8383;)</Th>
<th>Location</Th>
<th>Comment</th>
<th>Apply</Th>
</tr>
<?php
$extractfromurl=$_GET['post_id'];

//for above err symbol we do to extract 
$View="select * from jobcategory where jobcatid ='$extractfromurl'";
$sql=mysqli_query($conn,$View);
$row=mysqli_fetch_array($sql);
$err=$row['jobcatname'];
echo "<h2 style='color:red'>$err :-</h2>";
// now actual qurery starts

$Viewquery="select * from jobpost where jobCat ='$extractfromurl' order by datetime desc";
$execute=mysqli_query($conn,$Viewquery);
$srno=0;
while($datarows=mysqli_fetch_array($execute)){
$jobcatid=$datarows["jobid"];
$jobSubject =$datarows["jobSubject"];
$jobCompany=$datarows["jobCompany"];
$jobSalary=$datarows["jobSalary"];
$jobLocation=$datarows["jobLocation"];
$datetime=$datarows["datetime"];
$Details=$datarows["Details"]; 
$JobPostBy=$datarows["JobPostBy"];

$srno++;
?>
<tr>
<td><?php echo $srno; ?></td>


<Td><?php echo $jobSubject; ?></td>
<Td><?php echo $jobCompany; ?></td>
<Td><?php echo $datetime; ?></td>
<Td><?php echo $jobSalary; ?></td>
<Td><?php echo $jobLocation; ?></td>
<Td><?php echo $Details; ?></td>
<Td><button value="<?php echo $jobSubject ?>" class="btn btn-primary" data-toggle="modal" data-target="#jobApplicationModal">Apply</button>

</td>

<div class="form-group">
          </div>

</tr>
<?php }?>
</table>


</div>

</div><!--Ending of main area-->

<!--modal for applying job -->
<form action="ApplyForJob.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="jobApplicationModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Job Title you are applying for: <?php echo $value ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <?php echo $result; ?>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="applicantName" class="form-control-label">Name:</label>
            <input type="text" class="form-control" name="applicantName" id="applicantName">
          </div>
          <div class="form-group">
            <label for="applicantEmail" class="form-control-label">Email:</label>
            <input type="text" class="form-control" name="applicantEmail" id="applicantEmail"> 
          </div>
          <div class="form-group">
            <label for="applicantNumber" class="form-control-label">Phone Number:</label>
            <input type="text" class="form-control" name="applicantNumber" id="applicantNumber">
          </div>
           
            <div class="form-group">
                <label for="applicantCV">File input</label>
                <input type="file" class="form-control-file" id="applicantCV" name="applicantCV" aria-describedby="fileHelp" accept=".doc,.docx, .pdf" required />
                <small id="fileHelp" class="form-text text-muted">Please attach and CV and/or cover note for consideration in your application.</small>
            </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea class="form-control" name="message-text" id="message-text" rows="5"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Send message</button>
        
      </div>
    </div>
  </div>
</div>
</form>
