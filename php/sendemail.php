
<?php

// Import the Postmark Client Class:
require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;

$client = new PostmarkClient("a8d0af96-5427-4b31-805f-8f30bf313191");
$fromEmail = "griffinhines@uga.edu";
$toEmail = filter_input(INPUT_POST, 'email');
$subject = "Reset Password";
$htmlBody = "<strong>Hello</strong> click the following link to reset your password";
$textBody = "";
$tag = "";
$trackOpens = true;
$trackLinks = "None";
$messageStream = "broadcast";

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

?>


