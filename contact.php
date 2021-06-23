<?php

require_once 'vendor/autoload.php';

if(isset($_POST)) {
    $name = "";
    $firstname = "";
    $email = "";
    $msg = "";
    $email_body = "<div>";
      
    if(isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Name:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }

    if(isset($_POST['firstname'])) {
        $name = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>firstName:</b></label>&nbsp;<span>".$firstname."</span>
                        </div>";
    }
 
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
      
    if(isset($_POST['message'])) {
        $msg = htmlspecialchars($_POST['message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$msg."</div>
                        </div>";
    }
      
      
    $email_body .= "</div>";

    $transport = (new Swift_SmtpTransport('ssl0.ovh.net', 465))
    ->setUsername('contact@npack.info')
    ->setPassword('Biloute29!');
  
  // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom([$email => $firstname, $name])
        ->setTo(['contact@npack.info'])
        ->setBody($msg);

      
    if($result = $mailer->send($message)) {
        echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}