
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

$client = new PostmarkClient("175721ef-cf71-4ce3-8c67-a990519b72df");
$fromEmail = "gqh26238@uga.edu";
$toEmail = filter_input(INPUT_POST, 'forgotPW');
$subject = "Account info changed";
$htmlBody = "Your password is " . $currentpw['pass'];
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

?>


