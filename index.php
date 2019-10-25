<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; // exceções


$mail = new Email;
$mail->sendMail();
var_dump($mail);









