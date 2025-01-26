<?php
    spl_autoload_register(function ($clase){
        $fullpath="./PHPMailer-master/src/".$clase.".php";
        if (file_exists($fullpath))
        require_once $fullpath;
        else
            echo "<p>La clase $fullpath no se encuentra</p>";
    });
    function sendMail($imagen, $email, $mensaje, $asunto){
        
        $mail = new PHPMailer(true);
        
        try{
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
            $mail->isSMTP();                                         
            $mail->Host       = 'localhost';                  
            $mail->SMTPAuth   = false;                               
            $mail->Username   = '';                   
            $mail->Password   = '';                           
            //$mail->SMTPSecure = "tls";         
            $mail->Port       = 25;     
            
            $mail->setFrom('postmaster@dominio.com', 'postmaster');
            
            $mail->addAddress($email);   
            $mail->isHTML(true);       

            $mail->Subject = $asunto;
            $mail->addEmbeddedImage("img/".$imagen, 'image_cid');
            $mail->Body = "<p>".$mensaje."</p><br><img src='cid:image_cid'>";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->addAttachment("img/".$imagen);

            $mail->send();
            return true;
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }
?>