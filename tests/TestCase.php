<?php

namespace Tests;

use DG\BypassFinals;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();

        BypassFinals::enable();
    }
}
