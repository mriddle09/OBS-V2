
<?php
require("database.php");
$usere = filter_input(INPUT_POST, 'forgotPW');
$loginquery = "SELECT pass FROM userinfo
                    WHERE email = :e_mail"; #. filter_input(INPUT_POST, 'forgotPW');
$getpw = $db->prepare($loginquery);
$getpw->bindValue(':e_mail', $usere);
$getpw->execute();
$currentpw = $getpw->fetch();
// Import the Postmark Client Class:
require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;
$client = new PostmarkClient("175721ef-cf71-4ce3-8c67-a990519b72df");
$fromEmail = "gqh26238@uga.edu";
$toEmail = filter_input(INPUT_POST, 'forgotPW');
$subject = "Forgot Password";
$htmlBody = "Your password is " . $currentpw['pass'];
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
include("../html/forgotpass.php");
echo "password sent";
?>


