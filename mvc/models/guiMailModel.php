<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
class guiMailModel {
    function sendMail($tieude,$diachigui,$bodyconten,$url){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                       //Enable verbose debug output
            $mail->isSMTP();                                                //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                           //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                       //Enable SMTP authentication
            $mail->Username   = 'projectwebsite12102k2@gmail.com';          //SMTP username
            $mail->Password   = '3QYm6j6ZzTKhtbM';                          //SMTP password
            $mail->SMTPSecure = 'tls';                                      //Enable implicit TLS encryption
            $mail->Peort       = 587;                                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        


            //Recipients
            $mail->setFrom('projectwebsite12102k2@gmail.com', 'Mailer');
            $mail->addAddress($diachigui);                  //Add a recipient
            
            //gui file
            $mail->addAttachment($url);                     //Optional name
            //Content
            $mail->isHTML(true);                            //Set email format to HTML
            $mail->Subject = $tieude;
            $mail->Body    = $bodyconten;

            if($mail->send()){
               return true;
            }
        } catch (Exception $e) {
                return false;
                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>