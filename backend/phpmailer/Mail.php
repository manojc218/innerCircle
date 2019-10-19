<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/14/2019
 * Time: 2:39 PM
 */

/*use PHPMailer\PHPMailer\PHPMailer;*/
include_once ('SMTP.php');
class Mail
{



    public function send_mail($to, $sub, $msg)
    {


        require 'PHPMailer.php';

        $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->Host = 'smtp.gmail.com';

        $mail->Port = 587;

        $mail->SMTPSecure = 'tls';

        $mail->SMTPAuth = true;

        $mail->Username = "devmanoj940103@gmail.com";

        $mail->Password = "19940103Fighterx";

        $mail->setFrom('devmanoj940103@gmail.com', 'Inner Circle (PVT) Ltd.');

        $mail->addReplyTo('devmanoj940103@gmail.com', 'First Last');

        $mail->addAddress($to);

        $mail->Subject = $sub;

        $mail->Body = $msg;


        if (!$mail->send()) {
            echo"Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
        exit;
    }
}