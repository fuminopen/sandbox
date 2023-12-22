<?php

namespace Tests\Unit;

use App\Services\SlackService;
use DG\BypassFinals;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class SlackTest extends TestCase
{
    public function testCanSendSlackMessage(): void
    {
        // finalクラスのバイパスを有効化する
        BypassFinals::enable();

        // finalなクラスをモックする
        $mock = Mockery::mock(
            SlackService::class,
            function (MockInterface $m) {
                // モックの振る舞いを定義する

                return $m;
            }
        );

        // モックを利用する
    }
}
