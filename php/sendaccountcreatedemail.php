
<?php

#$loginquery = "SELECT pass FROM userinfo
#                    WHERE email = forgotPW
#                    ";
#$getpw = $db->prepare($loginquery);
#$getpw->execute();
#$currentpw = $getpw->fetch();
// Import the Postmark Client Class:
require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;

$client = new PostmarkClient("5b163fe7-e191-433d-bedb-a85c198f2b24");
$fromEmail = "griffinhines@uga.edu";
$toEmail = filter_input(INPUT_POST, 'email');
$subject = "Account created";
$htmlBody = "An account has been created under this email address";
$textBody = "";
$tag = "example-email-tag";
$trackOpens = true;
$trackLinks = "None";
$messageStream = "griffin1";

// Send an email:
$sendResult = $client->sendEmail(
  $fromEmail,
  $toEmail,
  $subject,
  $htmlBody,
  $textBody,
  $tag,
  $trackOpens,
  NULL, // Reply To
  NULL, // CC
  NULL, // BCC
  NULL, // Header array
  NULL, // Attachment array
  $trackLinks,
  NULL, // Metadata array
  $messageStream
);
include("../html/userhomepage.php");
?>


