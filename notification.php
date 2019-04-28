

<?php
//echo $usertype;
if($usertype==3){
	$q=mysqli_query($conn,"select * from adminpanel where (userAccess < $usertype+1 or userAccess =5) ORDER BY datetime DESC");
}else{
$q=mysqli_query($conn,"select * from adminpanel where (userAccess =$usertype or userAccess =5) ORDER BY datetime DESC");
}
$r=mysqli_num_rows($q);
if(!$r)
{
echo "<h2 style='color:red'>No any Notice found in this query !!!</h2>";
}
else{
?>
<h2 style="color:#00FFCC">All Notice by user type</h2>
<table class="table table-striped table-hover">
	<thead>
	
	<Tr class="success">
		<th>Sr.No</th>
		<th>Title</th>
		<th>Author</th>
		<th>category</th>
		<th>User type</th>
		<th>Date</th>
		<th>Details</th>
		
		
	</Tr>
	</thead>
		<tbody>
		<?php
		$i=1;
		while($row=mysqli_fetch_assoc($q)){
			
echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['author']."</td>";
echo "<td>".$row['category']."</td>";
echo "<td>".$row['userAccess']."</td>";
echo "<td>".$row['datetime']."</td>";
		$i++;
		
		?>
		<?php 
		$name=$_GET['name'];
		echo "<Td>
	<a href='$name?page=fullpost&post_id=".$row['id']."'><span class='btn btn-primary'>Live Preview</span>
		</a></td>"; ?>
	
	<?php 
	echo "</Tr>";
	?>	
		
		<?php } ?>
		</tbody>
</table>
<?php } ?>