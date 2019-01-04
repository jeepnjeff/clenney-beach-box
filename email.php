
<?php

require_once "phpmailer/class.phpmailer.php";
require_once "phpmailer/class.smtp.php";

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->Host = "mail.clenneybeachbox.com";
$mail->SMTPAuth= true;
$mail->Username="jeff@clenneybeachbox.com";
$mail->Password="J634beer!";
$mail->SMTPSecure = 'tls';
$mail->Port= 587;
$mail->From= "jeff@clenneybeachbox.com";
$mail->FromName= "jeff";
$mail->addAddress ('jeff@clenneybeachbox.com');

$mail->IsHTML (true);

$mail->Subject = 'Clenney Beach has sent you a message!.';
$mail->Body = 'Name: '.$_POST['name'].'<br><br>Email:  '.$_POST['email'].'<br><br>Phone: '.$_POST['phone'].'<br><br>Guest: '.$_POST['guest'].'<br>Arrive: '.$_POST['arrive'].'<br>Leave: '.$_POST['leave'].'<br><br>Message: '.$_POST['message'];


if (isset($_POST['names']) && !empty($_POST['names'])){
  die();
}else if ($mail->Send()){
  echo "Mailer Error:".$mail->ErrorInfo;
  }else {
    echo "Message Sent";
  }

  ?>