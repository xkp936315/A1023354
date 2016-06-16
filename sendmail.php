<?php
	require('PHPMailer/PHPMailerAutoload.php');

	$mail = new PHPMailer;

	$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'xkp936315@gmail.com';                 // SMTP username
	$mail->Password = 'wi0220lly';                           // SMTP password
	//$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('xkp936315@gmail.com', 'Mailer');
	//$mail->addAddress('aver803abth261@gmail.com');     // Add a recipient
	//$mail->addAddress('peter850609@gmail.com');
	$mail->addAddress = "$_POST['to']";;
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'php期末報告 A1023354';
	$mail->Body    = "$_POST['body']";

	//$mail->send();

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}

 ?>