<?php
date_default_timezone_get('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email']) && !empty(trim($_POST['email']))  && isset($_POST['message']) && !empty(trim($_POST['message'])) ) {
  
  $name = !empty($_POST['name']) ? utf8_decode($_POST['name']) : utf8_decode('Não informado');
  $email = $_POST['email'];
  $subject = !empty($_POST['subject']) ? utf8_decode($_POST['subject']) : utf8_decode('Não informado');
  $message = utf8_decode($_POST['message']);

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'email.contato.lbn@gmail.com';
  $mail->Password = '57mKSb%55AGV';
  $mail->Port = 587;
  
  $mail->setFrom('email.contato.lbn@gmail.com');
  $mail->addAddress('luizfernando.os@outlook.com');
  $mail->addAddress('contato@lbnsistemas.com.br');
  
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = "Nome: {$name}<br>
                E-mail: {$email}<br>
                Mensagem: {$message}<br>
                ";
  if($mail->send()) {
	  header('Location: enviado/index.php');
  } else {
    echo 'E-mail nao enviado.';
  }
} else {
  echo "E-mail, nao enviado: informar o e-mail e a mensagem.";
}
