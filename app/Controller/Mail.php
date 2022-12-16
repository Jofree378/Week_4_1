<?php
namespace App\Controller;

use App\Model\Mail as MailModel;
use Swift_Message;

class Mail
{
    public function mailAction()
    {
        $message = (new Swift_Message('Example mail'))
        ->setFrom('kd6666@mail.ru')
        ->setTo('mizintseva.l1012@mail.ru')
        ->setBody('Here');

        $result = MailModel::getTransport()->send($message);
        var_dump($result);
    }

}