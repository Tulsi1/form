
  <?php
//   use PHPMailer\PHPMailer\PHPMailer;
//   use PHPMailer\PHPMailer\Exception;
//   require 'PHPMailer-master/src/Exception.php';
//   require 'PHPMailer-master/src/PHPMailer.php';
//   require 'PHPMailer-master/src/SMTP.php';

//   $mail = new PHPMailer();
//   $mail->IsSMTP();

//   $mail->SMTPDebug  = 0;  
//   $mail->SMTPAuth   = TRUE;
//   $mail->SMTPSecure = "tls";
//   $mail->Port       = 587;
//   $mail->Host       = "smtp.gmail.com";
//   $mail->Username   = "sajaltry2001@gmail.com";
//   $mail->Password   = "sajal2010";
//   if(!empty($_POST["Submit"])) {
// 	$name = $_POST["Name"];
// 	$email = $_POST["Email"];
// 	$subject = $_POST["subject"];
// 	$content = $_POST["message"];

//   $mail->IsHTML(true);
//   $mail->AddAddress("sajalchh@gmail.com", "sajal");
//   $mail->SetFrom($email, $name);
// //   $mail->AddReplyTo("reply-to-email", "reply-to-name");
// //   $mail->AddCC("cc-recipient-email", "cc-recipient-name");
//   $mail->Subject = $subject;

//   $mail->MsgHTML($content); 
//   if(!$mail->Send()) {
//     echo "Error while sending Email.";
//     var_dump($mail);
//   } else {
//     echo "Email sent successfully";
//   }
// }
?>
<?php
  require_once 'vendor/autoload.php';
	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$subject = $_POST["subject"];
	$content = $_POST["message"];


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
  ->setUsername('sajaltry2001@gmail.com')
  ->setPassword('sajal2010')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message())
  ->setSubject($subject)
  ->setFrom([$email => $name])
  ->setTo(['sajaltry2001@gmail.com' => 'Sajal Chhamunya'])
  ->setBody('From:')
  ->addPart($name)
  // ->addPart($email)
  // ->addPart($content)
  ;

// Send the message
  if(!($mailer->send($message))) {
    echo "Error while sending Email.";
  } else {
    echo "Email sent successfully";
  }




?>