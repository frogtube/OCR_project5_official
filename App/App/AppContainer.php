<?php
/**
 * Created by PhpStorm.
 * User: ugo-fixe
 * Date: 16/10/2017
 * Time: 08:12
 */

namespace App;


use MyFramework\Container;

class AppContainer extends Container
{
    public function getSwiftMailerService($firstname, $lastname, $email, $content)
    {
        // Create the Transport
        $transport = (new \Swift_SmtpTransport('smtp.example.org', 25))
            ->setUsername('your username')
            ->setPassword('your password')
        ;

        // Create the Mailer using your created Transport
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        $message = (new \Swift_Message($firstname . ' ' . $lastname . ' vous a écrit un message'))
            ->setFrom($email)
            ->setTo('u.pradere@gmail.com')
            ->setBody($content)
        ;

        // Send the message
        $mailer->send($message);


        static $instance;
        if (!isset($instance))
        {
            $instance = new Swift;
        }
        return $instance;
    }

}