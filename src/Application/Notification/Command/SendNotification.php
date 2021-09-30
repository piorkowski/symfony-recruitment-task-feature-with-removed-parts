<?php
declare(strict_types=1);


namespace App\Application\Notification\Command;


use App\Domain\Notification\Notification;

class SendNotification
{
    private Notification $notification;

    public function __construct(
        Notification $notification
    )
    {
        $this->notification = $notification;
    }

    public function getNotification(): Notification
    {
        return $this->notification;
    }
}
