<?php
$result="";
	require_once("phpmailer/PHPMailerAutoload.php");
	
	if(empty($_POST['applicantName'])  		||
   empty($_POST['applicantEmail']) 		||
   empty($_POST['applicantNumber']) 		||
   empty($_POST['message-text'])	||
   !filter_var($_POST['applicantEmail'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
   else{
	//$email=$_POST['applicantEmail'];
	//$name=$_POST['applicantName'];
	$name = strip_tags(htmlspecialchars($_POST['applicantName']));
$email = strip_tags(htmlspecialchars($_POST['applicantEmail']));
$phone = strip_tags(htmlspecialchars($_POST['applicantNumber']));
$message = strip_tags(htmlspecialchars($_POST['message-text']));
$path = 'images/'.$_FILES["applicantCV"]["name"];
move_uploaded_file($_FILES["applicantCV"]["tmp_name"], $path);

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username='monsterkumar9334@gmail.com';
	$mail->Password='chicago@';
	$mail->AddAttachment($path);
	$mail->setFrom('$email','$name');
	$mail->addAddress('monsterkumar9334@gmail.com');
	$mail->addReplyTo('monsterkumar9334@gmail.com');
	
	$mail->isHTML(true);
	$mail->Subject='Form Submission: ';
	$mail->Body="<h1> Applied By {$name} </h1>From EmailId:- .$email
	<br> phone number:-.$phone
	<br>Message Conveyed:-.$message
	"
	
	;
	if(!$mail->send())
	{
		$result="Something went wrong";
	}
	else
	{
		$result="Your message is sent";
	}
   }
echo $result;

?>


