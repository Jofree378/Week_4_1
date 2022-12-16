<?php

namespace App\Model;

use Exception;
use Swift_Mailer;
use Swift_SmtpTransport;

class Mail
{
    public static function getTransport()
    {
        include '../vendor/autoload.php';

        try{

            $transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
                ->setUsername('kd6666@mail.ru')
                ->setPassword('WKAEgASwYmBHXTdxK7vc');
//WKAEgASwYmBHXTdxK7vc  Mail
//jfrqqsowpgtlhkcb Yandex
            $mailer = new Swift_Mailer($transport);

        } catch (Exception $e) {
            var_dump($e->getMessage());

        }
        return $mailer;
    }
}