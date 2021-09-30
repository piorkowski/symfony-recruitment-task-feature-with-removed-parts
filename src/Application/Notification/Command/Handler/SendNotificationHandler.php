<?php
declare(strict_types=1);

namespace App\Application\Notification\Command\Handler;

use App\Application\Notification\Command\SendNotification;
use App\Application\Notification\Notifier;
use App\Application\Notification\NotifierChain;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SendNotificationHandler implements MessageHandlerInterface
{
    private NotifierChain $notifier;

    public function __construct(
        NotifierChain $notifier
    )
    {
        $this->notifier = $notifier;
    }

    public function __invoke(SendNotification $sendNotification)
    {
        $this->notifier->send($sendNotification->getNotification());
    }
}
