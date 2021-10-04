<?php
require_once '../vendor/autoload.php';
session_start();
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$token = $post['token'];

if ($token !== $_SESSION['token']) {
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=error");
}else{
        if(isset($post)) {
            $name = "";
            $firstname = "";
            $email = "";
            $msg = "";
            $email_body = "<div>";
            
            if(isset($post['name'])) {
                $name = filter_var($post['name'], FILTER_SANITIZE_STRING);
                $email_body .= "<div>
                                <label><b>Name:</b></label>&nbsp;<span>".$name."</span>
                                </div>";
            }

            if(isset($post['firstname'])) {
                $name = filter_var($post['firstname'], FILTER_SANITIZE_STRING);
                $email_body .= "<div>
                                <label><b>firstName:</b></label>&nbsp;<span>".$firstname."</span>
                                </div>";
            }
        
            if(isset($post['email'])) {
                $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $post['email']);
                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                $email_body .= "<div>
                                <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                                </div>";
            }
            
            if(isset($post['message'])) {
                $msg = htmlspecialchars($post['message']);
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
            }
            
        }
    }