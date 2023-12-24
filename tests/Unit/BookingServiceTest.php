<?php

namespace Tests\Unit;

use App\Services\BookingService;
use App\Services\SlackService;
use DG\BypassFinals;
use Mockery;
use Mockery\MockInterface;
use Tests\TestCase;

class BookingServiceTest extends TestCase
{
    public function testCanSendSlackMessage(): void
    {
        // finalクラスのバイパスを有効化する
        BypassFinals::enable();

        // finalなクラスをモックする
        $mock = Mockery::mock(
            SlackService::class,
            function (MockInterface $m) {
                $m->shouldReceive('send')
                    ->once()
                    ->andReturn(true);

                return $m;
            }
        );

        $this->instance(
            SlackService::class,
            $mock
        );

        $sut = app()->make(BookingService::class);
        $this->assertTrue($sut->book());
        // モックを利用する
    }
}
