<?php
        class guimail{
        function testMail(){
            return "CAC VI THAN11";
        }
    }
    function show1()
    {
        $url = $_POST["lurl"];
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
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('projectwebsite12102k2@gmail.com', 'Mailer');
            $mail->addAddress('lequanglong12102k2@gmail.com', 'Joe User');     //Add a recipient
            
            //Attachments
            // $url = "/home/lql/Desktop/Thuc_Hanh_Tren_Lop/LeQuangLong_Bai_Thuc_Hanh_11.zip";
            $mail->addAttachment($url,'hello');         //Add attachments
            $mail->addAttachment('/home/lql/Pictures/Screenshot_2021-10-11_20_07_54.png', 'new.jpg');    //Optional name
            // if (!$mail->addAttachment($url)) {
            //     throw new Exception('Attachment failed');
            // }
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'chao em rat nheo';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>