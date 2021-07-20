<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$message = $_POST['mes'];
$email = $_POST['email'];


$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;
$mail->Username = 'gentsent@mail.ru';
$mail->Password = '8gF-2rc-5P7-KXr';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('gentsent@mail.ru');
$mail->addAddress('yokeanova@gmail.com');
$mail->isHTML(true);

$mail->Subject = 'Вопрос, заданный на сайте';
$mail->Body    = '' .$name . ' оставил заявку, его почта ' .$email. '<br>Текст сообщения: ' .$message;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>