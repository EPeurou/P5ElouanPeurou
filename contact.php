<?php
require_once 'vendor/autoload.php';
session_start();

$token = $_POST['token'];

if ($token !== $_SESSION['token']) {
    header("location: https://elouanpeurou.tech/index.php?action=error");
    exit;
}else{
        if(isset($_POST)) {
            $name = "";
            $firstname = "";
            $email = "";
            $msg = "";
            $email_body = "<div>";
            
            if(isset($_POST['name'])) {
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $email_body .= "<div>
                                <label><b>Name:</b></label>&nbsp;<span>".$name."</span>
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

            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
                ->setUsername('contact.peurou@gmail.com')
                ->setPassword('elticbtbbclljihm')
            ;
        
            $mailer = new Swift_Mailer($transport);

            $message = (new Swift_Message('contact blog'))
                ->setFrom([$email => $name." ".$firstname])
                ->setTo(['contact.peurou@gmail.com'])
                ->setBody($msg." "."de"." ".$email." ".$firstname." ".$name);
            
            $result = $mailer->send($message);
            
            if($result) {
                header("location: index.php?action=confirm");
                exit;
            } else {
                echo"We are sorry but the email did not go through";
            }
            
        }
    }