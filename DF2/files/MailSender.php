<?php 
	use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['semail'])){

	$mailc = "
		<h3>Congratulations! You have successfully subscribed to our newsletter!</h3>
	";

	require_once "mailer/PHPMailer.php";
	require_once 'mailer/SMTP.php';
	require_once 'mailer/Exception.php';	

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "deepbis1994@gmail.com";
	$mail->Password = "Adebadeepsex@@123";
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";
	$mail->isHTML(true);
	$mail->setFrom("deepbis1994@gmail.com","Desi Fusion Official");
	$mail->addAddress($_POST['semail']);
	$mail->Subject = "Desi Fusion Subscription";
	$mail->Body= $mailc;
	if($mail->send()){
		echo "send";
	}
	else{
		echo "Error" . $mail->ErrorInfo;
	}	
}
?>