<?php

declare(strict_types=1);

namespace Symfony\Component\Panther;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class SF5PantherTestCase extends WebTestCase
{
    use WebTestAssertionsTrait;

    public const CHROME = 'chrome';
    public const FIREFOX = 'firefox';

    protected function tearDown(): void
    {
        $this->doTearDown();
    }

    private function doTearDown(): void
    {
        parent::tearDown();
        self::getClient(null);
    }
}
