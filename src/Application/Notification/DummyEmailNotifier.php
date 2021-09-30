<?php

declare(strict_types=1);

namespace App\Application\Notification;

use App\Domain\Notification\Notification;

class DummyEmailNotifier implements Notifier
{
    private array $sentMessages = [];

    public function send(Notification $notification): void
    {
        $this->sentMessages[] = $notification;
    }

    public function getSentMessages(): array
    {
        return $this->sentMessages;
    }
}
