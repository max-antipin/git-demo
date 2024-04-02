<?php

declare(strict_types=1);

namespace MaxAntipin\Tests;

use MaxAntipin\VoidValue;
use PHPUnit\Framework\TestCase;

class VoidValueTest extends TestCase
{
    public function testCount(): void
    {
        $obj = new VoidValue();
        $this->assertCount(0, $obj);
    }

    public function testToString(): void
    {
        $obj = new VoidValue();
        $this->assertSame('', (string)$obj);
    }
}
