<?php
require_once "Mail.php";

$from = "envia.mis.mails@gmail.com"; 
$to = "hector.trejo@gmail.com"; //CHANGE THIS TO YOUR GMAIL ADDRESS WELL
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = "envia.mis.mails@gmail.com"; //CHANGE THIS TO YOUR GMAIL ADDRESS WELL
$password = "X3HJO8QQD2"; //CHANGE THIS TO YOUR GMAIL PASSWORD

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>
