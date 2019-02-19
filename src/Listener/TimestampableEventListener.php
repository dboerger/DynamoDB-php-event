<?php
/**
 * Created by PhpStorm.
 * User: derek
 * Date: 2019-02-19
 * Time: 08:38
 */

namespace Oasis\Mlib\Event\Listener;

use Oasis\Mlib\Event\TimestampableEvent;

class TimestampableEventListener
{

    public function TimestampableEvent(TimestampableEvent $event)
    {
        var_dump($event);die;
    }
}