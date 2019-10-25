<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; // exceções

class Email {

    private $mail = \stdclass::class; // variavel de excesão

    public function __construct() {// construtor

        $this->mail = new PHPMailer(true);

        $this->mail->isSMTP();                           // Send using SMTP
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $this->mail->CharSet = 'utf-8';

        $this->mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $this->mail->Username = 'hellen.maewep@gmail.com';                     // SMTP username
        $this->mail->Password = '@maewe@123';                               // SMTP password
        $this->mail->Port = 587;

        $this->mail->setFrom('hellen.maewep@gmail.com', 'Hellen'); // TCP port to connect to
    }

    public function sendMail() {
        try {
            $this->mail = new PHPMailer(true);
            
            $this->mail->isSMTP();                           // Send using SMTP
            $this->mail->setLanguage('br');
            $this->mail->isHTML(true);
            $this->mail->SMTPAuth = true;
            $this->mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $this->mail->CharSet = 'utf-8';

            $this->mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $this->mail->Username = 'hellen.maewep@gmail.com';                     // SMTP username
            $this->mail->Password = '@maewe@123';                               // SMTP password
            $this->mail->Port = 587;

            $this->mail->setFrom('hellen.maewep@gmail.com', 'Hellen'); // TCP port to connect to
            $this->mail->Subject = ("Esye é o meu primeiro envio do FSPHP");
            $this->mail->msgHTML("<h1>Olá mundo!</h1><p>esse é meu primeiro disparo de e-mail</p>");

            $this->mail->addAddress("hellen.maewep@gmail.com", "hellen");

            $send = $this->mail->send();

            var_dump($send);
        } catch (MailExcepition $exeption) {
            echo message()->error($exeption->getMessage());
        }
    }

}
