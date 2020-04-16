<?php
$to = 'jruckleweb@gmail.com'; // Put in your email address here
$subject  = "Message from Elevate WY Contact Form"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$fname = stripslashes($_REQUEST['fname']); // sender's name
$lname = stripslashes($_REQUEST['lname']);
$phone = stripslashes($_REQUEST['phone']);
$contactemail = stripslashes($_REQUEST['contactemail']); // sender's email
$message = stripslashes($_REQUEST['message']);


// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "Name: ".$fname."\r\n\n";  // add sender's name to the message
$msg .= "Last Name: ".$lname."\r\n\n";  // add sender's name to the message
$msg .= "Phone: ".$phone."\r\n\n";  // add sender's email to the message
$msg .= "E-mail: ".$contactemail."\r\n\n";  // add sender's email to the message
$msg .= "-----Message------: ".$message."\r\n\n";  // add sender's email to the message
$msg .= "\r\n\n";

$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
	header("Location:contactSuccess.html#main-wrapper");
} else {
	header("Location:contactFailed.html#main-wrapper");
}

?>
