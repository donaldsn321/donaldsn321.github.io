<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
   $recipient = $_POST["recipient"];
  $recipients = explode("\n", $recipient);
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $replyto = $_POST['replyto'];
  $from = $_POST['from'];
  $license = $_POST['license'];
  
 if ($license == "EMAILSPOOF2030"){
     
  if (empty($_FILES["file"]["type"])
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/ico")
		|| ($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "application/pdf")
		|| ($_FILES["file"]["type"] == "image/jpg")) {
  try{ 
    $mail->isSMTP();
    $mail->Host = 'mail.smtp2go.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'javate2985@mamejob.com'; // Email address which you want to use as SMTP server
    $mail->Password = 'CyburG01$'; // Email address Password
    $mail->Port = '587';
    $mail->setFrom($from , $name); // Email address which you used as SMTP server
   
   if (!empty($replyto)) {
    $mail->AddReplyTo($replyto, $name);
    }
    if ((($_FILES["file"]["type"] == "application/pdf")
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/ico")
		|| ($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpg"))
		&& ($_FILES["file"]["size"] < 10000000))
		{
    $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    }
    $mail->AddCustomHeader("Importance: High");
    
    

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;


foreach(array_slice($recipients, 0, 100000) as $key => $value) {

try{
    $mail->addAddress($value);
    $mail->send();
    $mail->ClearAllRecipients();
$alert = '<script src="done.js"></script>';
  } catch (Exception $e){
  $alert = '<script src="error.js"></script>';
    $mail->getSMTPInstance()->reset();
  }
  }
  }
  catch (Exception $e) {
        echo 'Invalid';
    }
}
else {
$alert = '<script src="attachment.js"></script>';
}
}
else {
    
  $alert = '<script src="license.js"></script>';
}

}
?>
