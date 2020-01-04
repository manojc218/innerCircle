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



    public function send_mail($to, $sub, $mailBody)
    {


        require 'PHPMailer.php';

        $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->isHTML(true);

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

        $mail->Body = $mailBody;


        if (!$mail->send()) {
            echo "Mail could not be send.<br>";
            echo"Mailer Error: " . $mail->ErrorInfo;
        } else {
            $alert="User, successfully registered";
            echo "<script type='text/javascript'>alert('$alert');</script>";
            header("Location:../view/add_new_user.php");
        }
        exit;
    }
}