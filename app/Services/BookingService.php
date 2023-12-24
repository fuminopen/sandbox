<?php

namespace App\Services;

class BookingService
{
    public function __construct(private readonly SlackService $slackService)
    {
    }

    public function book(): bool
    {
        $this->slackService->send();

        return true;
    }
}
