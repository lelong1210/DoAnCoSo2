<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class sendmail extends controller
{   
    function show(){
        $this->call_view("guimail");
    }
}
?>
