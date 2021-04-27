<?php 
if (isset($_POST['enviar'])) {
    try {
        // Create the SMTP Transport
        /*$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl'))
            ->setUsername('contactomovieshop@gmail.com')
            ->setPassword('contacto123');*/
        $transport = (new Swift_SmtpTransport('smtp.gmail.com','465'))
            ->setUsername('contactomovieshop@gmail.com')
            ->setPAssword('contacto123');            
     
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
     
        // Create a message
        $message = new Swift_Message();
     
        // Set a "subject"
        $message->setSubject('Contactarse MovieShop');
     
        // Set the "From address"
        $message->setFrom([$_POST['email'] => $_POST['nombre']]);
     
        // Set the "To address" [Use setTo method for multiple recipients, argument should be array]
        $message->addTo('contactomovieshop@gmail.com');
     
        // Set the plain-text "Body"
        $message->addPart('<strong>Email: </strong>'.$_POST['email'].'<br><strong>Nombre: </strong>'.$_POST['nombre'].'<br><strong>Mensaje: </strong>'.$_POST['mensaje']);
        // Send the message
        $result = $mailer->send($message);
        
        redirect('contact.php');
    
    } catch (Exception $e) {
      echo $e->getMessage();
    } 

            ////////////////////////////////////////////////////////////////

        /*$transport = (new Swift_SmtpTransport($GLOBALS['smtp.gmail.com'],$GLOBALS['587']))
                    ->setUsername($GLOBALS['contactomovieshop@gmail.com'])
                    ->setPAssword($GLOBALS['contacto123']);
    
        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Contacto desde el Blog'))
                    ->setFrom([$data['email']=>$data['name']])
                    ->setTo([$GLOBALS['mail_smtp_user']=>'Formulario de contacto del blog'])
                    ->setBody($this->processMailBody($data))
                    ->setContentType("text/html");
        
        return $mailer->send($message);*/
}
?>