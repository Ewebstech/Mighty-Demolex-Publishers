<?php
//echo(extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; 
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ob_start(); 

if(isset($_POST["send"])){
$name = stripslashes($_POST['name']); 
$email = $_POST['email']; 
$message = stripslashes($_POST['message']); 
$phone = stripslashes($_POST['phone']);

$id = time();
			


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
	
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP(); 
	// Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = false;                               // Enable SMTP authentication
    $mail->Username = 'nonyetech@gmail.com';                 // SMTP username
    $mail->Password = 'chinonye247';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nonyetech@gmail.com', 'Ewebs Tech Ltd.');
    $mail->addAddress('mightydemolexpublishers@gmail.com', 'Mighty Demolex Publishers');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Enquiry / Request Received';
    $mail->Body    = "<html>
							<body>
							<center>				
							<table cellpadding='10' border='0' width='600'>
							<tr style='background-color: ;'>
							<td width='30%' colspan='4' align='center'>
							<img src='http://www.mightydemolexpublishers.com/img/logo1.jpeg' width='auto' height='100' />
							</td>
							
							</tr>
							
							<tr>
							<td style='color: #fff; background-color:9f8e2a;' colspan='3' align='center'>Contact Information/Enquiry Received</td>
							</tr>
							<tr>
							<td style='color: #000;' colspan='3' align='left'>Dear Admin, You have received a message.</td>
							
							</tr>
							<tr>
							<td>Name:</td><td colspan='2' align='left'>$name</td>
							</tr>
							<tr>
							<td>Phone Number:</td><td colspan='2' align='left'>$phone</td>
							</tr>
							
							<tr>
							<td>Message:</td><td colspan='2' align='left'>$message</td>
							</tr>
							<tr>
							<td style='color: #000;' colspan='3' align='left'>Please establish contact ASAP.</td>
							
							</tr>
							<tr>
							<td style='color: #fff; background-color: 9f8e2a' colspan='3' align='center'>&copy; Mighty Demolex Publishers Ltd.</td>
							</tr>
							
							
							</table>
							</center>
						</body>
						</html>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
    $mail->send();
    //echo 'Message has been sent';
	header("location: contact.php?thanks=$name&success&mail=$id");
} catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	header("location: contact.php?thanks=$name&mail=$id&failed");
}