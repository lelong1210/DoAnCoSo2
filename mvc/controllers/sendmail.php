<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class sendmail extends controller
{   
    function show(){
        $this->call_view("guimail");
    }
    function show1()
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'projectwebsite12102k2@gmail.com';                     //SMTP username
            $mail->Password   = '3QYm6j6ZzTKhtbM';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Peort       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            $diachigui = "lqlong.20it1@vku.udn.vn";
            $bodyconten = "long ne kaka";

            //Recipients
            $mail->setFrom('projectwebsite12102k2@gmail.com', 'Mailer');
            $mail->addAddress($diachigui, 'Joe User');     //Add a recipient
            
            //Attachments
            $url = "/home/lql/Desktop/Thuc_Hanh_Tren_Lop/LeQuangLong_Bai_Thuc_Hanh_11.zip";
            // $mail->addAttachment($url,'hello');         //Add attachments
            $mail->addAttachment('/www/uploads/123.jpeg', 'new.jpg');    //Optional name
            // if (!$mail->addAttachment($url)) {
            //     throw new Exception('Attachment failed');
            // }
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'TIEU DE';
            $mail->Body    = $bodyconten;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>
