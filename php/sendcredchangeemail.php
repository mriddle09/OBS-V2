
<?php
require("database.php");
// Import the Postmark Client Class:
require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;
$client = new PostmarkClient("175721ef-cf71-4ce3-8c67-a990519b72df");
$fromEmail = "gqh26238@uga.edu";
$toEmail = filter_input(INPUT_POST, 'email');
$subject = "Profile updated";
$htmlBody = nl2br("Your profile information has been updated:\n\n" . filter_input(INPUT_POST, 'messagetype'));
$textBody = "";
$tag = "";
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
include("../html/profile.php");
echo "profile updated";
?>


