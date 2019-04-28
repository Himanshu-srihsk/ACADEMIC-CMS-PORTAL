<?php 
include('connection.php');
session_start();
if(isset($_POST['dislike'])){
$user=$_SESSION['user'];
//$eid=$_GET['id'];
$eid=$_POST['postid'];
$q=mysqli_query($conn,"select * from likepage where likedby='$user' and postid='$eid'");
$r=mysqli_num_rows($q);
if($r>0){
	mysqli_query($conn,"delete from likepage where likedby='$user' and postid='$eid'");
}
else{
$q=mysqli_query($conn,"insert into likepage(likedby,postid,dislikeno)values('$user','$eid',1)");
}

$q1=mysqli_query($conn,"select * from likepage where postid='$eid'");
$rr=mysqli_num_rows($q1);
echo $rr;

}
//header('location:student.php?page=Blog');
?>