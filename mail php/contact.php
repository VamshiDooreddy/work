<?php
	$message = '';
		if(isset($_POST["submit"])){
			$message = '
				<h3 align="center">DOJOSOFT CONTACT PAGE DETAILS</h3>
				<table border="1" width="100%" cellpadding="5" cellspacing="5">
					<tr>
						<td width="30%">Name</td>
						<td width="70%">'.$_POST["name"].'</td>
					</tr>
					<tr>
						<td width="30%">Email Address</td>
						<td width="70%">'.$_POST["email"].'</td>
					</tr>
				
					<tr>
						<td width="30%">Mobile Number</td>
						<td width="70%">'.$_POST["phone"].'</td>
					</tr>
					<tr>
						<td width="30%">Message</td>
						<td width="70%">'.$_POST["message"].'</td>
					</tr>
				</table>
			';
			$email = $_POST["email"];
			require '../class/class.phpmailer.php';
		$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;

//	===================================================================
//	JUST EDIT BELOW FIVE LINES
//	===================================================================
    $mail->Host = "mail.levahostels.com";					// Enter "mail.my-domain.com"
	$mail->Username = "info@levahostels.com";			// Enter an email address created through cPanel
	$mail->Password = "HostelsLeva123@";						// Enter the email password created through cPanel
	$mail->AddAddress("hanivisuvamshi@gmail.com", "levahostels"); // Enter the recipient "to" email address
	$mail->Subject = "User Contact Details Levahostels";	//or subject "Any Preferred Email Subject";
//	===================================================================
//  DO NOT EDIT BELOW THIS ~~ MODIFY AT YOUR OWN RISK & DO NOT CONTACT SUPPORT
//  IF YOU NEED HELP, GOOGLE AND LEARN ABOUT PHPMAILER OR CONTACT A PROGRAMMER
//	===================================================================

$mail->From = $email;
$mail->FromName = $name;
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Body = $message;
$mail->AltBody ="Name    : {$name}\n\nEmail   : {$email}\n\nMessage : {$message}";
$mail->SMTPDebug  = 0;	




			if($mail->Send()){
			//	echo "<script>alert('mail sent successfully we reach you as soon as possible, Thank you')</script>";
				echo "<script>window.location.href='../contact.php?m=1#contact'</script>";
			}else{
			    // echo error_get_last()['message'];
				echo "<script>window.location.href='../contact.php?m=0#contact'</script>";
			}
		}
?>