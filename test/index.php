<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; // exceções

$mail = new Email(2, "smtp.gmail.com", "hellen.maewep@gmail.com", "@maewe@1234", "tsl", '587', "hellen.maewep@gmail.com", "Hellen");
$mail->sendMail();
var_dump($mail);









