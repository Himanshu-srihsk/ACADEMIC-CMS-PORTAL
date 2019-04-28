<?php
include("connection.php");
$q=mysqli_query($conn,"select * from events ORDER BY addedat DESC");
$r=mysqli_num_rows($q);



if(!$r)
{
echo "<h2 style='color:red'>No any Notice found in this query !!!</h2>";
}
else{
?>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="success">
				    <th> serial no. </th>
                    <th>Organiser</th>
                    <th>When</th>
                    <th>Offer</th>
                    <th>Where</th>
					<th>Added By</th>
					<th>Interseted:</th>
					<th>Going:</th>
                </tr>
            </thead>
            <tbody>
             <?php
		$i=1;
		session_start();
		$user=$_SESSION['user'];
		while($row=mysqli_fetch_assoc($q)){
			
echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['organiser']."</td>";
echo "<td>".$row['time']."</td>";
echo "<td>".$row['offer']."</td>";
echo "<td>".$row['place']."</td>";
echo "<td>".$row['addedby']."</td>";

   
$event=$row['id'];
$q1=mysqli_query($conn,"select * from attendevent where eventid='$event'");
$r1=mysqli_num_rows($q1);
 
echo "<td>".$r1."</td>";

$q2=mysqli_query($conn,"select * from attendevent where eventid='$event' and semail='$user'");
$r2=mysqli_num_rows($q2);

if($r2==0){
		?>
	
		<Td>
		<a type="brt" href="javascript:Approve('<?php echo $row['id']; ?>')" style='color:green'>
		<button id="my_button" class="btn"><span class='glyphicon glyphicon-ok-circle'></span></button></a>
<?php } else{ ?>
		<Td>
		<a type="brt" href="javascript:disapprove('<?php echo $row['id']; ?>')" style='color:green'>
		<button id="my_button" class="btn"><span class='glyphicon glyphicon-remove'></span></button></a>
        
<?php } ?>
		</td>
		
		<?php
		
		echo "</Tr>";
$i++;
?>
		   
                
            </tbody>
		<?php } ?>
        </table>
 <?php } ?>
