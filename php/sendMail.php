<?php 	
	require '../PHPMailer-master/PHPMailerAutoload.php';

	$name = "\nგამომგზავნის სახელი: ".$_POST["name"]."\n";
	$fromMail = "\nგამომგზავნის email: ".$_POST["mail"]."\n";
	$subject = $_POST["subject"];
	$message = "\n".$_POST["message"];

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP(); // Set mailer to use SMTP
	$mail->Host = 'tls://smtp.gmail.com:587';
	$mail->CharSet = "UTF-8";
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'phpautomailer7@gmail.com'; // SMTP username
	$mail->Password = 'righthererightnow'; // SMTP password

	$mail->addAddress('lbero15@freeuni.edu.ge');     // Add a recipient

	$mail->Subject = $subject;
	$mail->Body    = $name.$fromMail.$message;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
	header("Location: ../?cur=about");
?>